<?php

namespace App\Service;

use App\Entity\Franchises;
use App\Entity\Bilan;
use App\Repository\TransactionRepository;
use Doctrine\ORM\EntityManagerInterface;

class ClotureFinanciereService
{
    private EntityManagerInterface $em;
    private TransactionRepository $transactionRepo;

    public function __construct(EntityManagerInterface $em, TransactionRepository $transactionRepo)
    {
        $this->em = $em;
        $this->transactionRepo = $transactionRepo;
    }

    /**
     * @throws \Exception
     */
    public function cloturerMois(Franchises $franchise, int $mois, int $annee): void
    {
        // 1. Récupérer toutes les transactions non clôturées pour cette franchise, ce mois et cette année
        $transactions = $this->transactionRepo->findTransactionsNonClotureesPourMois($franchise, $mois, $annee);

        $totalRecettes = 0;
        $totalChargesTrans = 0;

        // 2. Boucle pour calculer les totaux dans Transaction
        foreach ($transactions as $t) {
            if ($t->getType() === 'RECETTE') {
                $totalRecettes += $t->getMontant();
            } elseif ($t->getType() === 'DEPENSE') {
                $totalChargesTrans += $t->getMontant();
            }
        }

        // 3. Récupérer le total des Charges depuis la table Charge
        $startDate = new \DateTime(sprintf('%04d-%02d-01', $annee, $mois));
        $endDate = clone $startDate;
        $endDate->modify('last day of this month')->setTime(23, 59, 59);

        $qbCharges = $this->em->createQueryBuilder()
            ->select('SUM(c.montant)')
            ->from(\App\Entity\Charge::class, 'c')
            ->where('c.date_charge >= :start AND c.date_charge <= :end')
            ->andWhere('c.franchise_id = :franchise')
            ->setParameter('start', $startDate)
            ->setParameter('end', $endDate)
            ->setParameter('franchise', $franchise);

        $totalChargesBase = (float) $qbCharges->getQuery()->getSingleScalarResult();
        
        $totalChargesGlobal = $totalChargesBase + $totalChargesTrans;

        // 4. Calcule le résultat net global
        $resultatNet = $totalRecettes - $totalChargesGlobal;

        // On arrête s'il n'y a absolument rien à clôturer
        if (empty($transactions) && $totalChargesBase == 0 && $totalRecettes == 0) {
            throw new \Exception("Aucune donnée financière ou transaction modifiée trouvée pour ce mois/année.");
        }

        // 5. L'Archivage : Chercher un Bilan existant ou en créer un nouveau
        $bilan = $this->em->getRepository(Bilan::class)->findOneBy([
            'mois' => $mois,
            'annee' => $annee,
            'franchise_id' => $franchise
        ]);

        if (!$bilan) {
            $bilan = new Bilan();
            $bilan->setMois($mois);
            $bilan->setAnnee($annee);
            $bilan->setFranchiseId($franchise); // setFranchiseId() d'après src/Entity/Bilan.php
            $this->em->persist($bilan);
        }

        $bilan->setTotalRecettes($totalRecettes); // setTotalRecettes() d'après src/Entity/Bilan.php
        $bilan->setTotalCharges($totalChargesGlobal); // setTotalCharges() d'après src/Entity/Bilan.php
        $bilan->setResultatNet($resultatNet); // setResultatNet() d'après src/Entity/Bilan.php

        // Passe le statut de chaque transaction à est_cloture = true
        foreach ($transactions as $t) {
            $t->setEstCloture(true);
        }

        // 6. Sauvegarde en base (Transaction Transactionnelle)
        $this->em->flush();
    }
}
