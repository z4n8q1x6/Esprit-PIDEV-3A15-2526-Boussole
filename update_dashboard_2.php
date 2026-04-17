<?php
$file = 'src/Controller/DashboardSiegeController.php';
$content = file_get_contents($file);
$posStart = strpos($content, '// Calculer Réel (Revenus du mois)');
$posEnd = strpos($content, "return \->render('dashboard_siege/index.html.twig', [");
$sub = substr($content, $posStart, $posEnd - $posStart);

$replace = <<<EOD
// Calculer Réel (Revenus et Dépenses du mois)
            \ = 0;
            \ = 0;
            foreach (\ as \) {
                if ((int) \->getDate()->format('n') === \ && (int) \->getDate()->format('Y') === \) {
                    if (\->getType() === 'RECETTE') {
                        \ += \->getMontant();
                    } elseif (\->getType() === 'DEPENSE') {
                        \ += \->getMontant();
                    }
                }
            }

            // Calculer Budget Prévu (Objectif Revenu)
            \ = \->getRepository(Budget_previsionnel::class)->findBy([
                'mois' => \,
                'annee' => \,
                'type_budget' => 'OBJECTIF_REVENU',
                'franchise_id' => null, // Bugdet réseau global
            ]);
            \ = 0;
            foreach (\ as \) {
                \ += \->getMontantCible();
            }
            if (empty(\)) {
                \ = \->getRepository(Budget_previsionnel::class)->findBy([
                    'mois' => \, 'annee' => \, 'type_budget' => 'OBJECTIF_REVENU'
                ]);
                foreach (\ as \) {
                    \ += \->getMontantCible();
                }
            }

            // Calculer Budget Prévu (Limite Dépense)
            \ = \->getRepository(Budget_previsionnel::class)->findBy([
                'mois' => \,
                'annee' => \,
                'type_budget' => 'LIMITE_DEPENSE',
                'franchise_id' => null, // Bugdet réseau global
            ]);
            \ = 0;
            foreach (\ as \) {
                \ += \->getMontantCible();
            }
            if (empty(\)) {
                \ = \->getRepository(Budget_previsionnel::class)->findBy([
                    'mois' => \, 'annee' => \, 'type_budget' => 'LIMITE_DEPENSE'
                ]);
                foreach (\ as \) {
                    \ += \->getMontantCible();
                }
            }

            \['labels'][] = \;
            \['reel_revenus'][] = \;
            \['budget_revenus'][] = \;
            \['reel_depenses'][] = \;
            \['budget_depenses'][] = \;
        }

        // Création du graphique interactif (Réel vs Budget)
        \ = \->createChart(Chart::TYPE_BAR);
        
        \->setData([
            'labels' => \['labels'],
            'datasets' => [
                [
                    'label' => 'Réel (Revenus)',
                    'backgroundColor' => '#00d4ff', // Cyan
                    'data' => \['reel_revenus'],
                    'borderRadius' => 4,
                ],
                [
                    'label' => 'Objectif (Revenus)',
                    'backgroundColor' => 'rgba(0, 212, 255, 0.4)', // Faded Cyan
                    'data' => \['budget_revenus'],
                    'borderRadius' => 4,
                ],
                [
                    'label' => 'Réel (Dépenses)',
                    'backgroundColor' => '#ef4444', // Red
                    'data' => \['reel_depenses'],
                    'borderRadius' => 4,
                ],
                [
                    'label' => 'Limite (Dépenses)',
                    'backgroundColor' => 'rgba(239, 68, 68, 0.4)', // Faded Red
                    'data' => \['budget_depenses'],
                    'borderRadius' => 4,
                ],
            ],
        ]);

        \->setOptions([
            'responsive' => true,
            'maintainAspectRatio' => false,
            'plugins' => [
                'legend' => [
                    'labels' => [
                        'color' => '#a0aec0' // Couleur du texte de légende
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

        
EOD;

$newContent = str_replace($sub, $replace, $content);
file_put_contents($file, $newContent);
echo "Success\n";
