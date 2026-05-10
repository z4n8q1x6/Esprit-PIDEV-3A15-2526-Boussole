<?php

namespace App\Service;

use App\Entity\Charge;

class ChargeManager
{
    public function calculatePriorityScore(Charge $charge): int
    {
        $today = new \DateTime();
        $dateCharge = $charge->getDateCharge();
        
        if (!$dateCharge) {
            return 0;
        }

        // Calcul de l'ancienneté en jours
        $days = $today->diff($dateCharge)->days;
        $score = (float) $days;

        $statusStr = mb_strtolower($charge->getStatusValidation() ?? '', 'UTF-8');

        // Application des coefficients (Règles métier identifiées dans le contrôleur)
        if (str_contains($statusStr, 'valid')) {
            $score *= 1.4; // +40% pour les validées
        } elseif (str_contains($statusStr, 'attente')) {
            $score *= 1.2; // +20% pour celles en attente
        }

        return (int) round($score);
    }

    public function validate(Charge $charge): bool
    {
        // #titre empty
        if (empty($charge->getTitre())) {
            throw new \InvalidArgumentException('Le titre est obligatoire');
        }

        // #titre starts with number
        if (preg_match('/^\d/', $charge->getTitre())) {
            throw new \InvalidArgumentException('Le titre ne peut pas commencer par un chiffre');
        }

        // #montant empty or not positive
        if ($charge->getMontant() === null || $charge->getMontant() <= 0) {
            throw new \InvalidArgumentException('Le montant doit être un nombre positif');
        }

        // #date_charge in the future
        if ($charge->getDateCharge() > new \DateTime()) {
            throw new \InvalidArgumentException('La date de la charge ne peut pas être dans le futur');
        }

        // #type validation
        $allowedTypes = ['FIXE', 'VARIABLE'];
        if (!in_array($charge->getType(), $allowedTypes)) {
            throw new \InvalidArgumentException('Le type de charge doit être FIXE ou VARIABLE');
        }

        return true;
    }
}
