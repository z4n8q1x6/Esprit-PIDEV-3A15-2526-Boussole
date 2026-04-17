<?php

namespace App\EventSubscriber;

use App\Entity\Transaction;
use App\Entity\Budget_previsionnel;
use Doctrine\Bundle\DoctrineBundle\Attribute\AsDoctrineListener;
use Doctrine\ORM\Events;
use Doctrine\ORM\Event\PostPersistEventArgs;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RequestStack;

/**
 * Écouteur d'événement Doctrine : Notification préventive de "Rupture de Budget".
 *
 * Ce subscriber se déclenche automatiquement après chaque insertion (postPersist)
 * d'une entité Transaction en base de données.
 *
 * Algorithme :
 * 1. Vérifie si la transaction est de type DEPENSE.
 * 2. Calcule la somme de toutes les dépenses du mois en cours pour la franchise.
 * 3. Récupère le Budget_previsionnel (LIMITE_DEPENSE) du mois.
 * 4. Si (Total Dépenses / Limite) * 100 >= 90% → déclenche une alerte Flash.
 */
#[AsDoctrineListener(event: Events::postPersist)]
class BudgetAlertSubscriber
{
    public function __construct(
        private RequestStack $requestStack
    ) {}

    public function postPersist(PostPersistEventArgs $args): void
    {
        $entity = $args->getObject();

        // On n'écoute que les entités Transaction
        if (!$entity instanceof Transaction) {
            return;
        }

        // On ne surveille que les DÉPENSES
        if ($entity->getType() !== 'DEPENSE') {
            return;
        }

        $franchise = $entity->getFranchise_id();
        if (!$franchise) {
            return;
        }

        $em = $args->getObjectManager();
        $now = new \DateTime();
        $mois = (int) $now->format('n');
        $annee = (int) $now->format('Y');

        // === ÉTAPE 1 : Calculer le total des dépenses du mois pour cette franchise ===
        $start = new \DateTime(sprintf('%d-%02d-01 00:00:00', $annee, $mois));
        $end = clone $start;
        $end->modify('last day of this month 23:59:59');

        $totalDepenses = $em->createQueryBuilder()
            ->select('SUM(t.montant)')
            ->from(Transaction::class, 't')
            ->where('t.franchise_id = :franchise')
            ->andWhere('t.type = :type')
            ->andWhere('t.date >= :start AND t.date <= :end')
            ->setParameter('franchise', $franchise)
            ->setParameter('type', 'DEPENSE')
            ->setParameter('start', $start)
            ->setParameter('end', $end)
            ->getQuery()
            ->getSingleScalarResult();

        $totalDepenses = (float) ($totalDepenses ?? 0);

        // === ÉTAPE 2 : Récupérer la LIMITE_DEPENSE du mois ===
        // 1. On cherche d'abord s'il y a un budget spécifique pour cette franchise ce mois-ci
        $budget = $em->getRepository(Budget_previsionnel::class)->findOneBy([
            'franchise_id' => $franchise,
            'mois' => $mois,
            'annee' => $annee,
            'type_budget' => 'LIMITE_DEPENSE',
        ]);

        // 2. Fallback (Comme le Dashboard) : S'il n'y en a pas, on prend la dernière limite configurée globalement
        if (!$budget) {
            $budget = $em->getRepository(Budget_previsionnel::class)->findOneBy([
                'type_budget' => 'LIMITE_DEPENSE'
            ], ['id' => 'DESC']);
        }

        if (!$budget) {
            return; // Pas de budget défini = pas de contrôle
        }

        $limite = $budget->getMontantCible();
        if ($limite <= 0) {
            return;
        }

        // === ÉTAPE 3 : Algorithme de détection de rupture ===
        $pourcentage = ($totalDepenses / $limite) * 100;

        if ($pourcentage >= 100) {
            // DÉPASSEMENT TOTAL
            $this->addFlashMessage(
                'error',
                sprintf(
                    '🚨 DÉPASSEMENT DE BUDGET ! Vous avez dépensé %.0f TND sur une limite de %.0f TND (%.0f%%). Veuillez contacter l\'administration.',
                    $totalDepenses, $limite, $pourcentage
                )
            );
        } elseif ($pourcentage >= 90) {
            // ALERTE PRÉVENTIVE à 90%
            $this->addFlashMessage(
                'warning',
                sprintf(
                    '⚠️ Attention : Vous avez consommé %.0f%% de votre budget autorisé ce mois (%.0f TND / %.0f TND). Ralentissez vos dépenses !',
                    $pourcentage, $totalDepenses, $limite
                )
            );
        }
    }

    /**
     * Injecte un message Flash dans la session pour affichage via SweetAlert / Flasher.
     */
    private function addFlashMessage(string $type, string $message): void
    {
        $request = $this->requestStack->getCurrentRequest();
        if ($request && $request->hasSession()) {
            $request->getSession()->getFlashBag()->add($type, $message);
        }
    }
}
