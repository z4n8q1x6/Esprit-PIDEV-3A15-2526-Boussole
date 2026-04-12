<?php

namespace App\Repository;

use App\Entity\Alerteias;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class AlerteiasRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Alerteias::class);
    }

    public function searchAndSort(?string $search, string $sort, string $direction)
    {
        return $this->createQueryBuilder('a')
            ->andWhere('a.type_alerte LIKE :search')
            ->setParameter('search', '%' . $search . '%')
            ->orderBy('a.' . $sort, $direction)
            ->getQuery()
            ->getResult();
    }
}