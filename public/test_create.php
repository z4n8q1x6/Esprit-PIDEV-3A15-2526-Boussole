<?php
// Quick test to find the exact DB error
require dirname(__DIR__).'/vendor/autoload.php';

use App\Kernel;
use App\Entity\Franchises;
use App\Entity\Utilisateur;

$kernel = new Kernel('dev', true);
$kernel->boot();

$container = $kernel->getContainer();
$em = $container->get('doctrine')->getManager();

try {
    // Test 1: Check DB connection
    $conn = $em->getConnection();
    echo "DB Connected OK\n";
    
    // Test 2: Check franchises table structure
    $result = $conn->executeQuery("SHOW CREATE TABLE franchises");
    $row = $result->fetchAssociative();
    echo "Franchises table:\n" . $row['Create Table'] . "\n\n";
    
    // Test 3: Check utilisateur table structure  
    $result2 = $conn->executeQuery("SHOW CREATE TABLE utilisateur");
    $row2 = $result2->fetchAssociative();
    echo "Utilisateur table:\n" . $row2['Create Table'] . "\n\n";
    
    // Test 4: Try to create
    $franchise = new Franchises();
    $franchise->setNom("Test SARL");
    $franchise->setEmail("test@test.tn");
    $franchise->setTelephone("12345678");
    $franchise->setAdresse("Tunis");
    $franchise->setSolde_actuel(5000.0);
    $franchise->setActif(true);
    $franchise->setDate_creation(new \DateTime());
    
    $em->persist($franchise);
    $em->flush();
    
    echo "Franchise created with ID: " . $franchise->getId() . "\n";
    
    // Clean up
    $em->remove($franchise);
    $em->flush();
    echo "Test cleanup done.\n";
    
} catch (\Throwable $e) {
    echo "ERROR: " . $e->getMessage() . "\n";
    echo "File: " . $e->getFile() . ":" . $e->getLine() . "\n";
    echo "Trace: " . $e->getTraceAsString() . "\n";
}
