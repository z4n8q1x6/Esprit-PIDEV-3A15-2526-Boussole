<?php

namespace App\Repository;

use App\Entity\Charge;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class ChargeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Charge::class);
    }

    // START alerte ia functions
    // Get total charges by type for a specific month/year/franchise
    public function getTotalByType($franchiseId, string $chargeType, int $month, int $year): float
    {
        $startDate = new \DateTime("$year-$month-01 00:00:00");
        $endDate = new \DateTime("$year-$month-01 23:59:59");
        $endDate->modify('last day of this month');

        $result = $this->createQueryBuilder('c')
            ->select('COALESCE(SUM(c.montant), 0) as total')
            ->andWhere('c.franchise_id = :franchiseId')
            ->andWhere('c.type = :chargeType')
            ->andWhere('c.date_charge >= :startDate')
            ->andWhere('c.date_charge <= :endDate')
            ->andWhere('c.status_validation = :validStatus')
            ->setParameter('franchiseId', $franchiseId)
            ->setParameter('chargeType', $chargeType)
            ->setParameter('startDate', $startDate)
            ->setParameter('endDate', $endDate)
            ->setParameter('validStatus', 'VALIDE')
            ->getQuery()
            ->getOneOrNullResult();

        return $result['total'] ?? 0.0;
    }

    // Count charges by status for a franchise
    public function countByStatus($franchiseId, string $status): int
    {
        $result = $this->createQueryBuilder('c')
            ->select('COUNT(c.id) as count')
            ->andWhere('c.franchise_id = :franchiseId')
            ->andWhere('c.status_validation = :status')
            ->setParameter('franchiseId', $franchiseId)
            ->setParameter('status', $status)
            ->getQuery()
            ->getOneOrNullResult();

        return $result['count'] ?? 0;
    }

    // END alerte ia functions
}
