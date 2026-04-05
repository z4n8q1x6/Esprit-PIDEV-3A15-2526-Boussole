<?php

namespace App\Command;

use App\Entity\Utilisateur;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

#[AsCommand(name: 'app:fix-passwords', description: 'Fix enterprise user passwords')]
class FixPasswordsCommand extends Command
{
    public function __construct(
        private EntityManagerInterface $em,
        private UserPasswordHasherInterface $hasher
    ) {
        parent::__construct();
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $users = $this->em->getRepository(Utilisateur::class)->findAll();

        $output->writeln('=== ALL USERS ===');
        foreach ($users as $u) {
            $output->writeln(sprintf(
                'ID: %s | Email: %s | Role: %s | Actif: %s | Pass[0..29]: %s',
                $u->getId_user(), $u->getEmail(), $u->getRole(),
                $u->getActif() ? 'true' : 'false',
                substr($u->getPassword(), 0, 30)
            ));
        }

        // Fix all ROLE_FRANCHISE users
        foreach ($users as $u) {
            if ($u->getRole() === 'ROLE_FRANCHISE') {
                $hash = $this->hasher->hashPassword($u, '1234');
                $u->setMot_de_passe($hash);
                $u->setActif(true);
                $output->writeln('Updated: ' . $u->getEmail() . ' -> hash: ' . substr($hash, 0, 30) . '...');
            }
        }

        $this->em->flush();
        $output->writeln('');

        // Verify
        $koxi = $this->em->getRepository(Utilisateur::class)->findOneBy(['email' => 'koxi@gmail.com']);
        if ($koxi) {
            $valid = $this->hasher->isPasswordValid($koxi, '1234');
            $output->writeln('Verification koxi@gmail.com with "1234": ' . ($valid ? 'SUCCESS' : 'FAIL'));
        }

        return Command::SUCCESS;
    }
}
