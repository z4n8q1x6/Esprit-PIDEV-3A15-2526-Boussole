<?php

namespace App\Tests;

use App\Entity\Utilisateur;
use App\Service\UtilisateurManager;
use PHPUnit\Framework\TestCase;

class UtilisateurManagerTest extends TestCase
{
    private UtilisateurManager $utilisateurManager;

    protected function setUp(): void
    {
        $this->utilisateurManager = new UtilisateurManager();
    }

    public function testValiderUtilisateurReussite(): void
    {
        $user = new Utilisateur();
        $user->setEmail('test@example.com');
        $user->setMot_de_passe('password123');

        $this->assertTrue($this->utilisateurManager->validerUtilisateur($user));
    }

    public function testValiderUtilisateurEchecEmail(): void
    {
        $user = new Utilisateur();
        $user->setEmail('mauvais_email');
        $user->setMot_de_passe('password123');

        $this->expectException(\InvalidArgumentException::class);
        $this->utilisateurManager->validerUtilisateur($user);
    }

    public function testValiderUtilisateurEchecPwd(): void
    {
        $user = new Utilisateur();
        $user->setEmail('test@example.com');
        $user->setMot_de_passe('123');

        $this->expectException(\InvalidArgumentException::class);
        $this->utilisateurManager->validerUtilisateur($user);
    }

    public function testVerrouillerCompteEtBloquerConnexion(): void
    {
        $user = new Utilisateur();
        // Par défaut, l'utilisateur est actif
        $user->setActif(true);
        
        // 1. Verrouiller le compte
        $this->utilisateurManager->verrouillerCompte($user);
        
        // 2. Vérifier que le statut est faux
        $this->assertFalse($user->getActif());

        // 3. Vérifier que la connexion est bloquée et déclenche l'exception
        $this->expectException(\LogicException::class);
        $this->expectExceptionMessage('Erreur : Ce compte a été verrouillé par un administrateur.');
        
        $this->utilisateurManager->verifierDroitConnexion($user);
    }

    public function testConnexionAutorisee(): void
    {
        $user = new Utilisateur();
        // Par défaut, l'utilisateur est actif
        $user->setActif(true);
        
        $this->assertTrue($this->utilisateurManager->verifierDroitConnexion($user));
    }
}
