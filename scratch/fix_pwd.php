<?php

require __DIR__ . '/../vendor/autoload.php';
(new \Symfony\Component\Dotenv\Dotenv())->bootEnv(__DIR__.'/../.env');
$kernel = new App\Kernel('dev', true);
$kernel->boot();

$container = $kernel->getContainer();
$em = $container->get('doctrine.orm.entity_manager');

$conn = $em->getConnection();
$hash = '$2y$13$g/ivpEMx3.CvIqEePeEIT.WCBtVi9RIMWFCrv.M81S4.u0AnCM0MO';
$conn->executeStatement("UPDATE utilisateur SET mot_de_passe = ? WHERE email = ?", [$hash, 'admin@boussole.tn']);

echo "Password updated.\n";
