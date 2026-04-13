<?php
$f = 'src/Controller/DashboardSiegeController.php';
$c = file_get_contents($f);
$c = preg_replace('/^\xEF\xBB\xBF/', '', $c); // Remove BOM
$c = preg_replace('/^<\?php\s*/i', '', $c); // Remove broken <?php
$c = "<?php\n\n" . trim($c); // Re-add properly
file_put_contents($f, $c);
echo "File fixed\n";
