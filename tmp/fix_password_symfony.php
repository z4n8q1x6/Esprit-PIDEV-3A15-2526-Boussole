<?php
require __DIR__ . '/../vendor/autoload.php';

use App\Kernel;

$kernel = new Kernel('dev', true);
$kernel->boot();
$container = $kernel->getContainer();

$em = $container->get('doctrine')->getManager();
$hasherFactory = $container->get('security.password_hasher_factory');

$pdo = new PDO('mysql:host=127.0.0.1;dbname=boussole;charset=utf8mb4', 'root', '');

// Get all users
$stmt = $pdo->query("SELECT id_user, email, role, actif, mot_de_passe FROM utilisateur");
$users = $stmt->fetchAll(PDO::FETCH_ASSOC);

echo "=== ALL USERS ===\n";
foreach ($users as $u) {
    echo sprintf("ID: %s | Email: %s | Role: %s | Actif: %s | Pass[0..29]: %s\n",
        $u['id_user'], $u['email'], $u['role'], $u['actif'], substr($u['mot_de_passe'], 0, 30));
}

// Use Symfony hasher via the entity
$repo = $em->getRepository(\App\Entity\Utilisateur::class);
$userEntity = $repo->findOneBy(['email' => 'koxi@gmail.com']);

if ($userEntity) {
    $hasher = $container->get('security.user_password_hasher');
    $newHash = $hasher->hashPassword($userEntity, '1234');
    echo "\n=== NEW SYMFONY HASH ===\n$newHash\n";
    
    $userEntity->setMot_de_passe($newHash);
    $em->flush();
    
    echo "Password updated for koxi@gmail.com\n";
    
    // Verify
    $isValid = $hasher->isPasswordValid($userEntity, '1234');
    echo "Verification: " . ($isValid ? "SUCCESS" : "FAIL") . "\n";
} else {
    echo "User koxi@gmail.com not found!\n";
}
