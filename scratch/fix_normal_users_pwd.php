<?php

require __DIR__ . '/../vendor/autoload.php';
(new \Symfony\Component\Dotenv\Dotenv())->bootEnv(__DIR__.'/../.env');
$kernel = new App\Kernel('dev', true);
$kernel->boot();

$container = $kernel->getContainer();
$em = $container->get('doctrine.orm.entity_manager');

$conn = $em->getConnection();

$hash1 = password_hash('user123', PASSWORD_BCRYPT, ['cost' => 13]);
$conn->executeStatement("UPDATE utilisateur SET mot_de_passe = ? WHERE email = ?", [$hash1, 'azizjlassi235@gmail.com']);

$hash2 = password_hash('aziz123', PASSWORD_BCRYPT, ['cost' => 13]);
$conn->executeStatement("UPDATE utilisateur SET mot_de_passe = ? WHERE email = ?", [$hash2, 'azizjlassi236@gmail.com']);

echo "Passwords hashed and updated correctly for normal users!\n";
