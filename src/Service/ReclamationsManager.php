<?php

namespace App\Service;

use App\Entity\Reclamations;

class ReclamationsManager
{
    public function validate(Reclamations $reclamation): bool
    {
        // #sujet empty
        if (empty($reclamation->getSujet())) {
            throw new \InvalidArgumentException('Le sujet est obligatoire');
        }

        // #sujet starts with number
        if (preg_match('/^\d/', $reclamation->getSujet())) {
            throw new \InvalidArgumentException('Le sujet ne peut pas commencer par un chiffre');
        }

        // #desc empty
        if (empty($reclamation->getDescription())) {
            throw new \InvalidArgumentException('La description est obligatoire');
        }

        // #desc starts with number
        if (preg_match('/^\d/', $reclamation->getDescription())) {
            throw new \InvalidArgumentException('La description ne peut pas commencer par un chiffre');
        }

        // #desc length less then 5 ch
        if (strlen($reclamation->getDescription()) < 5) {
            throw new \InvalidArgumentException('La description doit contenir au moins 5 caractères');
        }

        return true;
    }
}
