<?php

namespace App\Service;

use Phpml\Clustering\KMeans;

class AiClusteringService
{
    /**
     * Analyse les données financières des franchises et les regroupe en 3 clusters via K-Means.
     * Étiquette chaque cluster comme "Performants", "Équilibrés", "À risque" selon le ratio financier.
     *
     * @param array $franchisesData Données structurées venant du repository :
     *                              [ ['franchise_id'=>1, 'nom_franchise'=>'A', 'total_recettes'=>1000, 'total_depenses'=>500], ... ]
     * @return array Tableau des clusters enrichis pour Twig et Chart.js
     */
    public function analyzeFranchisePerformances(array $franchisesData): array
    {
        if (count($franchisesData) < 3) {
            // KMeans(3) va échouer si on a moins de 3 éléments.
            // On renvoie un tableau vide pour que la vue gère ce fallback.
            return [];
        }

        $samples = [];
        // Extracting X and Y for KMeans
        foreach ($franchisesData as $data) {
            // X = Recettes, Y = Dépenses
            $samples[] = [
                (float) $data['total_recettes'],
                (float) $data['total_depenses']
            ];
        }

        // 1. Instancier l'algorithme K-Means avec 3 clusters
        $kmeans = new KMeans(3);

        // 2. Analyser et regrouper (Clustering)
        $clusters = $kmeans->cluster($samples);

        // 3. Analyser les centres des clusters pour affecter les labels
        // On calcule le ratio (Recettes / Dépenses) de chaque centroid moyen pour déterminer quel cluster est quoi.
        $clusterMetrics = [];
        foreach ($clusters as $index => $clusterPoints) {
            if (empty($clusterPoints)) {
                $clusterMetrics[$index] = ['score' => 0];
                continue;
            }

            $sumRecettes = 0;
            $sumDepenses = 0;
            foreach ($clusterPoints as $point) {
                $sumRecettes += $point[0];
                $sumDepenses += $point[1];
            }

            $avgRecettes = $sumRecettes / count($clusterPoints);
            $avgDepenses = $sumDepenses / count($clusterPoints);

            // Logique Métier : Écart recettes-dépenses pour le score
            // Un grand ratio (Beaucoup de recettes, peu de dépenses) est performant
            // Si Dépenses = 0, on met un score artificiellement élevé avec juste la recette
            $score = ($avgDepenses > 0) ? ($avgRecettes / $avgDepenses) : ($avgRecettes > 0 ? 999999 : 0);
            
            // Si on veut être encore plus basique:
            // Score = Bénéfice = (Recette - Dépense). On va utiliser le bénéfice moyen pour être + direct.
            $beneficeMoyen = $avgRecettes - $avgDepenses;

            $clusterMetrics[$index] = [
                'benefice_moyen' => $beneficeMoyen,
                'index' => $index
            ];
        }

        // Trier les metrics par bénéfice décroissant
        usort($clusterMetrics, function($a, $b) {
            return $b['benefice_moyen'] <=> $a['benefice_moyen'];
        });

        // Mapping de l'index du cluster à une étiquette et une couleur de la charte
        // index 0 dans notre liste triée => Grosse perf ("Performants", Vert)
        // index 1 => "Équilibrés" (Jaune)
        // index 2 => "À risque" (Rouge)
        
        $labelsMapping = [];
        if(isset($clusterMetrics[0])) $labelsMapping[$clusterMetrics[0]['index']] = ['label' => 'Performants', 'color' => '#00e5ff']; // Vert clair/Cyan
        if(isset($clusterMetrics[1])) $labelsMapping[$clusterMetrics[1]['index']] = ['label' => 'Équilibrés', 'color' => '#ffc107']; // Jaune
        if(isset($clusterMetrics[2])) $labelsMapping[$clusterMetrics[2]['index']] = ['label' => 'À risque', 'color' => '#ff4d4d']; // Rouge

        // 4. Formater les résultats pour le graphique (Scatter Chart)
        $formattedResults = [];

        foreach ($clusters as $clusterIndex => $points) {
            if (empty($points)) continue;

            $mapping = $labelsMapping[$clusterIndex] ?? ['label' => 'Inconnu', 'color' => '#ffffff'];

            $dataset = [
                'label' => $mapping['label'],
                'backgroundColor' => $mapping['color'],
                'data' => [],
                'franchises' => [],
                'pointRadius' => 6,
                'pointHoverRadius' => 8
            ];

            foreach ($points as $point) {
                // Trouver à quelle franchise correspond ce point
                foreach ($franchisesData as $fData) {
                    if ((float)$fData['total_recettes'] === $point[0] && (float)$fData['total_depenses'] === $point[1]) {
                        $dataset['data'][] = ['x' => $point[0], 'y' => $point[1]];
                        $dataset['franchises'][] = [
                            'nom' => $fData['nom_franchise'],
                            'recettes' => $point[0],
                            'depenses' => $point[1]
                        ];
                    }
                }
            }

            $formattedResults[] = $dataset;
        }

        return $formattedResults;
    }
}
