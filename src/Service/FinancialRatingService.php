<?php

namespace App\Service;

use App\Entity\Franchises;
use App\Entity\Transaction;
use App\Entity\Budget_previsionnel;
use Doctrine\ORM\EntityManagerInterface;

class FinancialRatingService
{
    public function __construct(
        private EntityManagerInterface $em
    ) {}

    /**
     * Algorithme d'Évaluation (Rating) Financier
     * Note chaque franchise avec A, B, C ou D basé sur sa performance.
     */
    public function evaluateFranchise(Franchises $franchise, int $mois, int $annee): string
    {
        $score = 0;

        $start = new \DateTime(sprintf('%d-%02d-01 00:00:00', $annee, $mois));
        $end = clone $start;
        $end->modify('last day of this month 23:59:59');

        // Récupérer les totaux (Recettes / Dépenses) de la franchise pour le mois spécifié en utilisant un DTO pour la performance
        $transactionsDTO = $this->em->createQueryBuilder()
            ->select('NEW App\DTO\TransactionTypeTotalDTO(t.type, SUM(t.montant))')
            ->from(Transaction::class, 't')
            ->where('t.franchise_id = :franchise')
            ->andWhere('t.date >= :start AND t.date <= :end')
            ->setParameter('franchise', $franchise)
            ->setParameter('start', $start)
            ->setParameter('end', $end)
            ->groupBy('t.type')
            ->getQuery()
            ->getResult();

        $recettes = 0.0;
        $depenses = 0.0;
        foreach ($transactionsDTO as $dto) {
            if ($dto->type === 'RECETTE') {
                $recettes = $dto->total;
            } elseif ($dto->type === 'DEPENSE') {
                $depenses = $dto->total;
            }
        }

        $resultatNet = $recettes - $depenses;

        // Règle 1 : Si le Résultat Net du mois est > 0 ➔ +40 points
        if ($resultatNet > 0) {
            $score += 40;
        }

        // Récupérer les données budgétaires via les fallback du système (car parfois manquants en DB)
        $objectifRevenuBudget = $this->getBudget($franchise, $mois, $annee, 'OBJECTIF_REVENU');
        $limiteDepenseBudget = $this->getBudget($franchise, $mois, $annee, 'LIMITE_DEPENSE');

        // Règle 2 : Si les Recettes Totales >= à l'OBJECTIF_REVENU fixé par le siège ➔ +30 points
        if ($objectifRevenuBudget && $objectifRevenuBudget->getMontantCible() > 0) {
            if ($recettes >= $objectifRevenuBudget->getMontantCible()) {
                $score += 30;
            }
        }

        // Règle 3 : Si les Dépenses Totales <= à la LIMITE_DEPENSE fixée ➔ +30 points.
        if ($limiteDepenseBudget && $limiteDepenseBudget->getMontantCible() > 0) {
            // Une limite fixée -> si on ne la dépasse pas, on gagne les points !
            if ($depenses <= $limiteDepenseBudget->getMontantCible()) {
                $score += 30;
            }
        }

        // Attribution finale du Rating
        if ($score === 100) {
            return 'A'; // Parfait : Résultats + Objectif atteint + Limite respectée
        } elseif ($score >= 70) {
            return 'B'; // Bon : 2 conditions sur 3
        } elseif ($score >= 40) {
            return 'C'; // Passable : 1 condition sur 3
        } else {
            return 'D'; // Critique : 0 condition validée
        }
    }

    private function getBudget(Franchises $franchise, int $mois, int $annee, string $typeBudget): ?Budget_previsionnel
    {
        $budget = $this->em->getRepository(Budget_previsionnel::class)->findOneBy([
            'franchise_id' => $franchise,
            'mois' => $mois,
            'annee' => $annee,
            'type_budget' => $typeBudget,
        ]);

        if (!$budget) {
            $budget = $this->em->getRepository(Budget_previsionnel::class)->findOneBy([
                'type_budget' => $typeBudget
            ], ['id' => 'DESC']);
        }
        
        return $budget;
    }
}
