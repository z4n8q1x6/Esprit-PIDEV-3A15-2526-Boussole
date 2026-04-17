<?php
$file = 'src/Controller/DashboardSiegeController.php';
$content = file_get_contents($file);
$posStart = strpos($content, '// Calculer Réel (Revenus du mois)');
$posEnd = strpos($content, "return $this->render('dashboard_siege/index.html.twig', [");
$sub = substr($content, $posStart, $posEnd - $posStart);
file_put_contents('old.txt', $sub);
