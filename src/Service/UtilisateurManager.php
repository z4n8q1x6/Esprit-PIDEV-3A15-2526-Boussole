<?php

namespace App\Service;

use App\Entity\Utilisateur;

class UtilisateurManager
{
    public function validerUtilisateur(Utilisateur $user): bool
    {
        if (!filter_var($user->getEmail(), FILTER_VALIDATE_EMAIL)) {
            throw new \InvalidArgumentException('Email invalide.');
        }

        if (strlen($user->getPassword()) < 6) {
            throw new \InvalidArgumentException('Le mot de passe doit contenir au moins 6 caractères.');
        }

        return true;
    }

    public function verrouillerCompte(Utilisateur $user): void
    {
        $user->setActif(false);
    }

    public function verifierDroitConnexion(Utilisateur $user): bool
    {
        if (!$user->getActif()) {
            throw new \LogicException('Erreur : Ce compte a été verrouillé par un administrateur.');
        }

        return true;
    }
}
