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

    // Add custom methods as needed
}
