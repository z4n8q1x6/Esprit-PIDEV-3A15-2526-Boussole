<?php

$phpContent = <<<EOD
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
    public function index(EntityManagerInterface \$em, ChartBuilderInterface \$chartBuilder): Response
    {
        \$transactions = \$em->getRepository(Transaction::class)->findAll();

        \$revenus = 0;
        \$depenses = 0;

        foreach (\$transactions as \$t) {
            if (\$t->getType() === 'RECETTE') {
                \$revenus += \$t->getMontant();
            } elseif (\$t->getType() === 'DEPENSE') {
                \$depenses += \$t->getMontant();
            }
        }
        \$solde = \$revenus - \$depenses;

        // Calcul du taux global
        \$budgetsRevenus = \$em->getRepository(Budget_previsionnel::class)->findBy([
            'type_budget' => 'OBJECTIF_REVENU',
        ]);
        \$totalObjectif = 0;
        foreach (\$budgetsRevenus as \$b) {
            \$totalObjectif += \$b->getMontantCible();
        }
        \$tauxRevenus = \$totalObjectif > 0 ? (\$revenus / \$totalObjectif) * 100 : 0;

        \$budgetsDepenses = \$em->getRepository(Budget_previsionnel::class)->findBy([
            'type_budget' => 'LIMITE_DEPENSE',
        ]);
        \$totalLimite = 0;
        foreach (\$budgetsDepenses as \$b) {
            \$totalLimite += \$b->getMontantCible();
        }
        \$tauxDepenses = \$totalLimite > 0 ? (\$depenses / \$totalLimite) * 100 : 0;

        \$chartData = [];
        for (\$i = 2; \$i >= 0; \$i--) {
            \$date = new \DateTime()->modify("-\$i month");
            \$month = (int) \$date->format('n');
            \$year = (int) \$date->format('Y');

            \$label = \$this->getFrenchMonth(\$month) . ' ' . \$date->format('y');

            // Calculer Réel (Revenus du mois)
            \$reel = 0;
            foreach (\$transactions as \$t) {
                if (\$t->getType() === 'RECETTE'
                    && (int) \$t->getDate()->format('n') === \$month
                    && (int) \$t->getDate()->format('Y') === \$year) {
                    \$reel += \$t->getMontant();
                }
            }

            // Calculer Budget Prévu (Objectif Revenu Global)
            \$budgets = \$em->getRepository(Budget_previsionnel::class)->findBy([
                'mois' => \$month,
                'annee' => \$year,
                'type_budget' => 'OBJECTIF_REVENU',
                'franchise_id' => null,
            ]);
            \$budget = 0;
            foreach (\$budgets as \$b) {
                \$budget += \$b->getMontantCible();
            }

            if (empty(\$budgets)) {
                \$allBudgets = \$em->getRepository(Budget_previsionnel::class)->findBy([
                    'mois' => \$month,
                    'annee' => \$year,
                    'type_budget' => 'OBJECTIF_REVENU',
                ]);
                foreach (\$allBudgets as \$b) {
                    \$budget += \$b->getMontantCible();
                }
            }

            \$chartData['labels'][] = \$label;
            \$chartData['reel'][] = \$reel;
            \$chartData['budget'][] = \$budget;
        }

        \$chart = \$chartBuilder->createChart(Chart::TYPE_BAR);
        
        \$chart->setData([
            'labels' => \$chartData['labels'],
            'datasets' => [
                [
                    'label' => 'Réel (Revenus)',
                    'backgroundColor' => '#00d4ff', // Cyan
                    'data' => \$chartData['reel'],
                    'borderRadius' => 4,
                ],
                [
                    'label' => 'Budget (Objectifs)',
                    'backgroundColor' => '#f97316', // Orange
                    'data' => \$chartData['budget'],
                    'borderRadius' => 4,
                ],
            ],
        ]);

        \$chart->setOptions([
            'responsive' => true,
            'maintainAspectRatio' => false,
            'plugins' => [
                'legend' => [
                    'labels' => [
                        'color' => '#a0aec0' 
                    ]
                ]
            ],
            'scales' => [
                'x' => [
                    'grid' => [ 'color' => '#1e293b' ],
                    'ticks' => [ 'color' => '#a0aec0' ]
                ],
                'y' => [
                    'grid' => [ 'color' => '#1e293b' ],
                    'ticks' => [ 'color' => '#a0aec0' ]
                ]
            ]
        ]);

        return \$this->render('dashboard_siege/index.html.twig', [
            'revenus' => \$revenus,
            'depenses' => \$depenses,
            'solde' => \$solde,
            'chart' => \$chart,
            'taux_revenus' => \$tauxRevenus,
            'taux_depenses' => \$tauxDepenses,
        ]);
    }

    private function getFrenchMonth(int \$month): string
    {
        \$months = [
            1 => 'Jan', 2 => 'Fév', 3 => 'Mar', 4 => 'Avr',
            5 => 'Mai', 6 => 'Juin', 7 => 'Juil', 8 => 'Aoû',
            9 => 'Sep', 10 => 'Oct', 11 => 'Nov', 12 => 'Déc',
        ];
        return \$months[\$month] ?? '';
    }
}
EOD;

file_put_contents('src/Controller/DashboardSiegeController.php', ltrim(\$phpContent));

$mdContent = <<<EOM

* **Fichier** : `src/Controller/DashboardSiegeController.php`
    * **Lignes exactes** : Lignes 64 - 150
    * **Description** : Retour d'un graphique simplifié et lisible à 2 courbes (Réel vs Budget) et correction stricte de l'encodage (caractères é, ê et û qui affichaient "Ã©").
EOM;

// Append safely
file_put_contents('suivi_modifications.md', \$mdContent, FILE_APPEND);

echo "Update Complete";

