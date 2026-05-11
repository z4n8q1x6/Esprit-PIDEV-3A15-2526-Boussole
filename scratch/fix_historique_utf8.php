<?php
$file = 'c:\\Users\\siwar\\Desktop\\Boussole_Symfony\\templates\\franchise\\historique.html.twig';
$content = file_get_contents($file);

$replacements = [
    'PÃ©riode' => 'Période',
    'RÃ©initialiser' => 'Réinitialiser',
    'Cette AnnÃ©e' => 'Cette Année',
    'DÃ‰PENSE' => 'DÉPENSE',
    'PersonnalisÃ©e' => 'Personnalisée',
    'personnalisÃ©e' => 'personnalisée',
    'ModifiÃ©' => 'Modifié',
    'succÃ¨s' => 'succès',
    'caractÃ¨res' => 'caractères',
    'irrÃ©versible' => 'irréversible',
    'icÃ´ne' => 'icône',
    'Ã‰TAT' => 'ÉTAT',
    'Ã‰DITION' => 'ÉDITION',
    'DÃ©tails' => 'Détails',
    'rÃ©seau' => 'réseau',
    'requÃªtes' => 'requêtes',
    'paramÃ¨tres' => 'paramètres',
    'dÃ©lÃ©guÃ©' => 'délégué',
    'EmpÃªcher' => 'Empêcher',
    'Ã ' => 'à',
    'rÃ©seau' => 'réseau',
    'supprimÃ©e' => 'supprimée',
    'refusÃ©e' => 'refusée',
    'RÃ‰INITIALISER' => 'RÉINITIALISER'
];

foreach ($replacements as $search => $replace) {
    $content = str_replace($search, $replace, $content);
}

file_put_contents($file, $content);
echo "Encoding fixed!";
