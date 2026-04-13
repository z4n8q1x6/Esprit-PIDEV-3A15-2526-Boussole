<?php

namespace App\Controller;

use App\Entity\Transaction;
use App\Entity\Budget_previsionnel;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Attribute\Route;
use Symfony\UX\Chartjs\Builder\ChartBuilderInterface;
use Symfony\UX\Chartjs\Model\Chart;

class DashboardSiegeController extends AbstractController
{
    #[Route('/admin/dashboard', name: 'app_siege_dashboard')]
    public function index(EntityManagerInterface $em, ChartBuilderInterface $chartBuilder): Response
    {
        $transactions = $em->getRepository(Transaction::class)->findAll();

        $revenus = 0;
        $depenses = 0;

        foreach ($transactions as $t) {
            if ($t->getType() === 'RECETTE') {
                $revenus += $t->getMontant();
            } elseif ($t->getType() === 'DEPENSE') {
                $depenses += $t->getMontant();
            }
        }
        $solde = $revenus - $depenses;

        // Calcul du taux global (Total Revenus / Tous les Objectifs définis)
        $budgetsRevenus = $em->getRepository(Budget_previsionnel::class)->findBy([
            'type_budget' => 'OBJECTIF_REVENU',
        ]);
        $totalObjectif = 0;
        foreach ($budgetsRevenus as $b) {
            $totalObjectif += $b->getMontantCible();
        }
        $tauxRevenus = $totalObjectif > 0 ? ($revenus / $totalObjectif) * 100 : 0;

        // Calcul du taux global (Total Dépenses / Toutes les Limites définies)
        $budgetsDepenses = $em->getRepository(Budget_previsionnel::class)->findBy([
            'type_budget' => 'LIMITE_DEPENSE',
        ]);
        $totalLimite = 0;
        foreach ($budgetsDepenses as $b) {
            $totalLimite += $b->getMontantCible();
        }
        $tauxDepenses = $totalLimite > 0 ? ($depenses / $totalLimite) * 100 : 0;

        // Préparation des données du graphique (3 derniers mois)
        // Par simplicité, on structure un tableau des 3 derniers mois
        $chartData = [];
        for ($i = 2; $i >= 0; $i--) {
            $date = (new \DateTime())->modify("-$i month");
            $month = (int) $date->format('n');
            $year = (int) $date->format('Y');

            $label = $this->getFrenchMonth($month) . ' ' . $date->format('y');

            // Calculer Réel (Revenus du mois)
            $reel = 0;
            foreach ($transactions as $t) {
                if ($t->getType() === 'RECETTE'
                    && (int) $t->getDate()->format('n') === $month
                    && (int) $t->getDate()->format('Y') === $year) {
                    $reel += $t->getMontant();
                }
            }

            // --- Calculer Objectif de Revenu ---
            $budgetsRev = $em->getRepository(Budget_previsionnel::class)->findBy([
                'mois' => $month,
                'annee' => $year,
                'type_budget' => 'OBJECTIF_REVENU',
                'franchise_id' => null,
            ]);
            $objectifRevenu = 0;
            if (!empty($budgetsRev)) {
                foreach ($budgetsRev as $b) { $objectifRevenu += $b->getMontantCible(); }
            } else {
                $allBudgetsRev = $em->getRepository(Budget_previsionnel::class)->findBy([
                    'mois' => $month,
                    'annee' => $year,
                    'type_budget' => 'OBJECTIF_REVENU',
                ]);
                foreach ($allBudgetsRev as $b) { $objectifRevenu += $b->getMontantCible(); }
            }

            // --- Calculer Limites de Dépenses ---
            $budgetsDep = $em->getRepository(Budget_previsionnel::class)->findBy([
                'mois' => $month,
                'annee' => $year,
                'type_budget' => 'LIMITE_DEPENSE',
                'franchise_id' => null,
            ]);
            $limiteDepense = 0;
            if (!empty($budgetsDep)) {
                foreach ($budgetsDep as $b) { $limiteDepense += $b->getMontantCible(); }
            } else {
                $allBudgetsDep = $em->getRepository(Budget_previsionnel::class)->findBy([
                    'mois' => $month,
                    'annee' => $year,
                    'type_budget' => 'LIMITE_DEPENSE',
                ]);
                foreach ($allBudgetsDep as $b) { $limiteDepense += $b->getMontantCible(); }
            }

            // Budget Prévu = Objectif de Revenu - Limite de Dépenses
            $budget = $objectifRevenu - $limiteDepense;

            $chartData['labels'][] = $label;
            $chartData['reel'][] = $reel;
            $chartData['budget'][] = $budget;
        }

        // Créer l'objet Chart via Symfony UX
        $chart = $chartBuilder->createChart(Chart::TYPE_BAR);
        
        // Inversion pour affichage chronologique (de gauche à droite)
        $chartData['labels'] = array_reverse($chartData['labels']);
        $chartData['reel'] = array_reverse($chartData['reel']);
        $chartData['budget'] = array_reverse($chartData['budget']);

        $chart->setData([
            'labels' => $chartData['labels'],
            'datasets' => [
                [
                    'label' => 'Réel (Transactions)',
                    'backgroundColor' => '#00d4ff', // Cyan
                    'data' => $chartData['reel'],
                    'borderRadius' => 4,
                ],
                [
                    'label' => 'Budget Prévu',
                    'backgroundColor' => '#ff9800', // Orange
                    'data' => $chartData['budget'],
                    'borderRadius' => 4,
                ],
            ],
        ]);

        $chart->setOptions([
            'responsive' => true,
            'maintainAspectRatio' => false,
            'plugins' => [
                'legend' => [
                    'position' => 'bottom',
                    'labels' => [
                        'color' => '#a0aec0'
                    ]
                ]
            ],
            'scales' => [
                'x' => [
                    'grid' => [ 'display' => false ],
                    'ticks' => [ 'color' => '#a0aec0' ]
                ],
                'y' => [
                    'grid' => [ 'color' => '#1e293b' ],
                    'ticks' => [ 'color' => '#a0aec0' ]
                ]
            ]
        ]);

        return $this->render('dashboard_siege/index.html.twig', [
            'revenus' => $revenus,
            'depenses' => $depenses,
            'solde' => $solde,
            'chart' => $chart,
            'taux_revenus' => $tauxRevenus,
            'taux_depenses' => $tauxDepenses,
        ]);
    }

    private function getFrenchMonth(int $month): string
    {
        $months = [
            1 => 'Jan', 2 => 'Fév', 3 => 'Mar', 4 => 'Avr',
            5 => 'Mai', 6 => 'Juin', 7 => 'Juil', 8 => 'Aoû',
            9 => 'Sep', 10 => 'Oct', 11 => 'Nov', 12 => 'Déc',
        ];
        return $months[$month] ?? '';
    }
}
