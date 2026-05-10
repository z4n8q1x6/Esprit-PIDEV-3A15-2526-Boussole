<?php

namespace App\Repository;

use App\Entity\Budget_previsionnel;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class Budget_previsionnelRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Budget_previsionnel::class);
    }

    /**
     * Calcule le budget prevu net du mois pour tout le reseau:
     * somme des objectifs de revenu - somme des limites de depense.
     *
     * Aucune aggregation par franchise ou categorie n'est appliquee.
     */
    public function getNetPlannedBudgetByMonth(int $month, int $year): float
    {
        $result = $this->createQueryBuilder('b')
            ->select(
                "COALESCE(SUM(CASE WHEN b.type_budget = 'OBJECTIF_REVENU' THEN b.montant_cible WHEN b.type_budget = 'LIMITE_DEPENSE' THEN -b.montant_cible ELSE 0 END), 0) AS total_budget"
            )
            ->andWhere('b.mois = :month')
            ->andWhere('b.annee = :year')
            ->setParameter('month', $month)
            ->setParameter('year', $year)
            ->getQuery()
            ->getSingleScalarResult();

        return (float) ($result ?? 0.0);
    }
}
