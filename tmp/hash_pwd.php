<?php

use App\Entity\Utilisateur;
use Symfony\Component\Dotenv\Dotenv;
use Symfony\Component\PasswordHasher\Hasher\PasswordHasherFactory;

require __DIR__ . '/vendor/autoload.php';

(new Dotenv())->load(__DIR__ . '/.env');

// Create a simple password hasher for testing
$factory = new PasswordHasherFactory([
    'common' => ['algorithm' => 'auto'],
]);
$hasher = $factory->getPasswordHasher('common');
$hashedPassword = $hasher->hash('1234');

echo "Hashed password for '1234': " . $hashedPassword . "\n";

// Now run a SQL update because it's simpler than booting the whole kernel for a one-off script
// We already have the DB URL from .env
?>
