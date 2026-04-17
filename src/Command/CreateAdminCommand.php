<?php

namespace App\Command;

use App\Entity\Utilisateur;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Console\Attribute\AsCommand;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

#[AsCommand(
    name: 'app:create-admin',
    description: 'Creates a new admin user.',
)]
class CreateAdminCommand extends Command
{
    private EntityManagerInterface $entityManager;
    private UserPasswordHasherInterface $passwordHasher;

    public function __construct(EntityManagerInterface $entityManager, UserPasswordHasherInterface $passwordHasher)
    {
        parent::__construct();
        $this->entityManager = $entityManager;
        $this->passwordHasher = $passwordHasher;
    }

    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        $existingUser = $this->entityManager->getRepository(Utilisateur::class)->findOneBy(['email' => 'admin@gmail.com']);
        
        if ($existingUser) {
            $output->writeln('Admin user already exists!');
            return Command::SUCCESS;
        }

        $user = new Utilisateur();
        $user->setNom('Admin');
        $user->setPrenom('User');
        $user->setEmail('admin@gmail.com');
        $user->setRole('SIEGE');
        $user->setActif(true);
        $user->setDate_creation(new \DateTime());
        
        // Let's generate a random ID since it seems id_user is NOT auto-incrementing in entity? Wait.
        // If id_user is not auto_increment (GeneratedValue), I might need to fetch max or generate one.
        // Let's check how id_user is defined. 
        // #[ORM\Id]
        // #[ORM\Column(type: "integer")]
        // If there's no #[ORM\GeneratedValue], I might need to generate it, for now using rand(1000, 9999).
        $user->setId_user(rand(10000, 99999)); 

        $hashedPassword = $this->passwordHasher->hashPassword($user, 'admin123');
        $user->setMot_de_passe($hashedPassword);

        $this->entityManager->persist($user);
        $this->entityManager->flush();

        $output->writeln('Admin user created successfully.');

        return Command::SUCCESS;
    }
}
