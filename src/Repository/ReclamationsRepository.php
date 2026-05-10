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
            ->leftJoin('r.franchise_id', 'f')
            ->addSelect('f')
            ->andWhere('r.sujet LIKE :search')
            ->setParameter('search', '%' . $search . '%');

        // for non admin
        if ($franchise_id !== null) {
            $qb->andWhere('r.franchise_id = :f')
               ->setParameter('f', $franchise_id);
        }

        // Handle sorting by franchise name
        if ($sort === 'franchise_id') {
            $qb->orderBy('f.nom', $direction);
        } else {
            $qb->orderBy('r.' . $sort, $direction);
        }

        return $qb->getQuery()
            ->getResult();
    }
}
