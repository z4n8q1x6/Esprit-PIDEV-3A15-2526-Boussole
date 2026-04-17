<?php

namespace App\Repository;

use App\Entity\Alerteias;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

class AlerteiasRepository extends ServiceEntityRepository
{
    private ChargeRepository $chargeRepository;
    private TransactionRepository $transactionRepository;

    public function __construct(ManagerRegistry $registry, ChargeRepository $chargeRepository, TransactionRepository $transactionRepository)
    {
        parent::__construct($registry, Alerteias::class);
        $this->chargeRepository = $chargeRepository;
        $this->transactionRepository = $transactionRepository;
    }

    public function searchAndSort(?string $search, string $sort, string $direction, $franchise_id = null)
    {
        $qb = $this->createQueryBuilder('a')
            ->andWhere('a.type_alerte LIKE :search')
            ->setParameter('search', '%' . $search . '%');

        if ($franchise_id !== null) {
            $qb->andWhere('a.franchise_id= :f')
               ->setParameter('f', $franchise_id);
        }

        return $qb->orderBy('a.' . $sort, $direction)
            ->getQuery()
            ->getResult();
    }

    public function getFinancialData($franchiseId, int $month, int $year): array
    {
        $totalRecettes = $this->transactionRepository->getTotalByType($franchiseId, 'RECETTE', $month, $year);
        $totalChargesExploitation = $this->chargeRepository->getTotalByType($franchiseId, 'CHARGES_EXPLOITATIONS', $month, $year);
        $totalChargesFinanciere = $this->chargeRepository->getTotalByType($franchiseId, 'CHARGES_FINANCIERES', $month, $year);
        $totalChargesExceptionnelle = $this->chargeRepository->getTotalByType($franchiseId, 'CHARGES_EXCEPTIONNELLES', $month, $year);

        $resultatNet = $totalRecettes - ($totalChargesExploitation + $totalChargesFinanciere + $totalChargesExceptionnelle);

        $franchise = $this->getEntityManager()->getRepository(\App\Entity\Franchises::class)->find($franchiseId);
        $soldeActuel = $franchise ? $franchise->getSolde_actuel() : 0.0;

        $pendingChargesCount = $this->chargeRepository->countByStatus($franchiseId, 'EN_ATTENTE');
        $rejectedChargesCount = $this->chargeRepository->countByStatus($franchiseId, 'REJETTE');
        $transactionCount = $this->transactionRepository->countByMonth($franchiseId, $month, $year);

        return [
            'totalRecettes' => $totalRecettes,
            'totalChargesExploitation' => $totalChargesExploitation,
            'totalChargesFinanciere' => $totalChargesFinanciere,
            'totalChargesExceptionnelle' => $totalChargesExceptionnelle,
            'resultatNet' => $resultatNet,
            'soldeActuel' => $soldeActuel,
            'pendingChargesCount' => $pendingChargesCount,
            'rejectedChargesCount' => $rejectedChargesCount,
            'transactionCount' => $transactionCount,
        ];
    }
}
