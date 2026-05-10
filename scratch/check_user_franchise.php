<?php
require __DIR__.'/../vendor/autoload.php';
$kernel = new App\Kernel('dev', true);
$kernel->boot();
$em = $kernel->getContainer()->get('doctrine.orm.entity_manager');
$u = $em->getRepository('App\Entity\Utilisateur')->findOneBy(['email' => 'miikasaackerman23@gmail.com']);
if ($u) {
    if ($u->getIdFranchise()) {
        echo "Franchise id = " . $u->getIdFranchise()->getId() . "\n";
    } else {
        echo "User HAS NO franchise!\n";
    }
} else {
    echo "User not found\n";
}
