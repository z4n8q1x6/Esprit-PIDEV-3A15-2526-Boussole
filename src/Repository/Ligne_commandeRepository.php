<?php

namespace App\Repository;

use App\Entity\Ligne_commande;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class Ligne_commandeRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Ligne_commande::class);
    }

    // Add custom methods as needed
}
