<?php

use App\Kernel;
use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\BufferedOutput;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;
use Symfony\Component\Dotenv\Dotenv;

require __DIR__.'/vendor/autoload.php';

if (file_exists(__DIR__.'/.env')) {
    (new Dotenv())->load(__DIR__.'/.env');
}

$kernel = new Kernel($_SERVER['APP_ENV'] ?? 'dev', (bool) ($_SERVER['APP_DEBUG'] ?? true));
$kernel->boot();

$container = $kernel->getContainer();
$mailer = $container->get(MailerInterface::class);

$email = (new Email())
    ->from('test@boussole.tn')
    ->to('test@example.com')
    ->subject('Test Mailer')
    ->text('Testing if mailer works');

try {
    echo "Attempting to send email via: " . $_ENV['MAILER_DSN'] . "\n";
    $mailer->send($email);
    echo "Email sent successfully!\n";
} catch (\Exception $e) {
    echo "Error sending email: " . $e->getMessage() . "\n";
    echo "Type: " . get_class($e) . "\n";
}
