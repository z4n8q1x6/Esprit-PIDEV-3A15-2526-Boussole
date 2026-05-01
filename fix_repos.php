<?php

$dir = __DIR__ . '/../src/Repository';
$files = glob($dir . '/*.php');

foreach ($files as $file) {
    $content = file_get_contents($file);
    
    // Find the class name and entity name
    if (preg_match('/class (\w+)Repository extends ServiceEntityRepository/', $content, $matches)) {
        $entityName = $matches[1];
        
        // Handle special cases
        if ($entityName === 'BudgetPrevisionnel') {
            $entityName = 'Budget_previsionnel';
        } elseif ($entityName === 'Ligne_commande') {
            $entityName = 'Ligne_commande';
        }
        
        // Check if @extends already exists
        if (strpos($content, '@extends ServiceEntityRepository') === false) {
            $replacement = "/**\n * @extends ServiceEntityRepository<\App\Entity\\$entityName>\n */\nclass {$matches[1]}Repository extends ServiceEntityRepository";
            $content = str_replace("class {$matches[1]}Repository extends ServiceEntityRepository", $replacement, $content);
            file_put_contents($file, $content);
            echo "Fixed $file\n";
        }
    }
}
