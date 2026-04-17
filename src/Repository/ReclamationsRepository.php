<?php

namespace App\Repository;

use App\Entity\Reclamations;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class ReclamationsRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Reclamations::class);
    }

    public function searchAndSort(?string $search, string $sort, string $direction, $franchise_id = null)
    {
        $qb = $this->createQueryBuilder('r')
            ->andWhere('r.sujet LIKE :search')
            ->setParameter('search', '%' . $search . '%');

        // for non admin
        if ($franchise_id !== null) {
            $qb->andWhere('r.franchise_id = :f')
               ->setParameter('f', $franchise_id);
        }

        return $qb->orderBy('r.' . $sort, $direction)
            ->getQuery()
            ->getResult();
    }
}
