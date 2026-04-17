<?php

use App\Kernel;
use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Component\Console\Input\ArrayInput;
use Symfony\Component\Console\Output\BufferedOutput;
use Symfony\Component\Mailer\MailerInterface;
use Symfony\Component\Mime\Email;

require __DIR__.'/vendor/autoload.php';

$kernel = new Kernel('dev', true);
$kernel->boot();

$container = $kernel->getContainer();
$mailer = $container->get(MailerInterface::class);

$email = (new Email())
    ->from('test@boussole.tn')
    ->to('test@example.com')
    ->subject('Test Mailer')
    ->text('Testing if mailer works');

try {
    echo "Attempting to send email...\n";
    $mailer->send($email);
    echo "Email sent successfully!\n";
} catch (\Exception $e) {
    echo "Error sending email: " . $e->getMessage() . "\n";
    echo "DSN: " . $_ENV['MAILER_DSN'] . "\n";
}
