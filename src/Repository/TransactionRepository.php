<?php

namespace App\Repository;

use App\Entity\Transaction;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class TransactionRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Transaction::class);
    }

    // START alerte ia functions
    // Get total monthly transactions by type (RECETTE, etc)
    public function getTotalByType(int $franchiseId, string $transactionType, int $month, int $year): float
    {
        $startDate = new \DateTime("$year-$month-01 00:00:00");
        $endDate = new \DateTime("$year-$month-01 23:59:59");
        $endDate->modify('last day of this month');

        $result = $this->createQueryBuilder('t')
            ->select('COALESCE(SUM(t.montant), 0) as total')
            ->andWhere('t.franchise_id = :franchiseId')
            ->andWhere('t.type = :transactionType')
            ->andWhere('t.date >= :startDate')
            ->andWhere('t.date <= :endDate')
            ->setParameter('franchiseId', $franchiseId)
            ->setParameter('transactionType', $transactionType)
            ->setParameter('startDate', $startDate)
            ->setParameter('endDate', $endDate)
            ->getQuery()
            ->getOneOrNullResult();

        return $result['total'] ?? 0.0;
    }

    // Count transactions for a specific month/year/franchise
    public function countByMonth(int $franchiseId, int $month, int $year): int
    {
        $startDate = new \DateTime("$year-$month-01 00:00:00");
        $endDate = new \DateTime("$year-$month-01 23:59:59");
        $endDate->modify('last day of this month');

        $result = $this->createQueryBuilder('t')
            ->select('COUNT(t.id) as count')
            ->andWhere('t.franchise_id = :franchiseId')
            ->andWhere('t.date >= :startDate')
            ->andWhere('t.date <= :endDate')
            ->setParameter('franchiseId', $franchiseId)
            ->setParameter('startDate', $startDate)
            ->setParameter('endDate', $endDate)
            ->getQuery()
            ->getOneOrNullResult();

        return $result['count'] ?? 0;
    }
    // END alerte ai function

    public function findFilteredTransactions($franchise, ?string $type = null, ?string $search = null, ?string $periode = null, ?string $dateStart = null, ?string $dateEnd = null, string $sort = 'date', string $direction = 'DESC')
    {
        $qb = $this->createQueryBuilder('t')
            ->andWhere('t.franchise_id = :franchise')
            ->setParameter('franchise', $franchise);

        if ($type && $type !== 'TOUT') {
            $qb->andWhere('t.type = :type')
               ->setParameter('type', $type);
        }

        if ($search) {
            $qb->andWhere('t.description LIKE :search OR t.montant LIKE :search')
               ->setParameter('search', '%' . $search . '%');
        }

        // Gestion de la période
        if ($periode) {
            $now = new \DateTime();

            switch ($periode) {
                case 'this_month':
                    $start = new \DateTime('first day of this month 00:00:00');
                    $end = new \DateTime('last day of this month 23:59:59');
                    $qb->andWhere('t.date >= :start AND t.date <= :end')
                       ->setParameter('start', $start)
                       ->setParameter('end', $end);
                    break;
                case 'last_month':
                    $start = new \DateTime('first day of last month 00:00:00');
                    $end = new \DateTime('last day of last month 23:59:59');
                    $qb->andWhere('t.date >= :start AND t.date <= :end')
                       ->setParameter('start', $start)
                       ->setParameter('end', $end);
                    break;
                case 'this_year':
                    $start = new \DateTime('first day of January this year 00:00:00');
                    $end = new \DateTime('last day of December this year 23:59:59');
                    $qb->andWhere('t.date >= :start AND t.date <= :end')
                       ->setParameter('start', $start)
                       ->setParameter('end', $end);
                    break;
                case 'custom':
                    if ($dateStart) {
                        $start = new \DateTime($dateStart . ' 00:00:00');
                        $qb->andWhere('t.date >= :start')
                           ->setParameter('start', $start);
                    }
                    if ($dateEnd) {
                        $end = new \DateTime($dateEnd . ' 23:59:59');
                        $qb->andWhere('t.date <= :end')
                           ->setParameter('end', $end);
                    }
                    break;
                    // 'all' => ne rien faire, on prend tout
            }
        }

        $qb->orderBy('t.' . $sort, $direction);

        return $qb->getQuery()->getResult();
    }

    /**
     * Récupère le total des recettes et dépenses par franchise pour le clustering K-Means.
     */
    public function getFinancialDataForClustering(): array
    {
        $conn = $this->getEntityManager()->getConnection();
        
        $sql = '
            SELECT 
                f.id AS franchise_id,
                f.nom AS nom_franchise,
                SUM(CASE WHEN t.type = \'RECETTE\' THEN t.montant ELSE 0 END) AS total_recettes,
                SUM(CASE WHEN t.type = \'DEPENSE\' THEN t.montant ELSE 0 END) AS total_depenses
            FROM franchises f
            LEFT JOIN transaction t ON t.franchise_id = f.id
            GROUP BY f.id, f.nom
            HAVING total_recettes > 0 OR total_depenses > 0
        ';

        $stmt = $conn->prepare($sql);
        $result = $stmt->executeQuery();
        
        return $result->fetchAllAssociative();
    }

    /**
     * Récupère toutes les transactions non clôturées pour un mois et une année donnés.
     */
    public function findTransactionsNonClotureesPourMois($franchise, int $mois, int $annee): array
    {
        // Création des dates de début et de fin de mois
        $start = new \DateTime(sprintf('%d-%02d-01 00:00:00', $annee, $mois));
        $end = clone $start;
        $end->modify('last day of this month 23:59:59');

        return $this->createQueryBuilder('t')
            ->andWhere('t.franchise_id = :franchise')
            ->andWhere('t.est_cloture = false')
            ->andWhere('t.date >= :start AND t.date <= :end')
            ->setParameter('franchise', $franchise)
            ->setParameter('start', $start)
            ->setParameter('end', $end)
            ->getQuery()
            ->getResult();
    }
}
