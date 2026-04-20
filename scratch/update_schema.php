<?php

require __DIR__ . '/../vendor/autoload.php';
(new \Symfony\Component\Dotenv\Dotenv())->bootEnv(__DIR__.'/../.env');

$kernel = new App\Kernel('dev', true);
$kernel->boot();

$container = $kernel->getContainer();
$em = $container->get('doctrine.orm.entity_manager');

$schemaTool = new \Doctrine\ORM\Tools\SchemaTool($em);
$classes = $em->getMetadataFactory()->getAllMetadata();

$sqls = $schemaTool->getUpdateSchemaSql($classes);
$conn = $em->getConnection();

$success = 0;
$failed = 0;

foreach ($sqls as $sql) {
    try {
        $conn->executeStatement($sql);
        $success++;
        echo "[OK] " . $sql . "\n";
    } catch (\Exception $e) {
        $failed++;
        echo "[FAILED] " . $sql . "\n";
        echo "Reason: " . $e->getMessage() . "\n";
    }
}

echo "\nSummary: $success successful, $failed failed.\n";
