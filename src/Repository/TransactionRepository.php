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

    /**
     * Recherche avancée pour l'historique des transactions
     */
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
}