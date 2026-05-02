<?php

namespace App\Service;

use App\Entity\Transaction;

class TransactionManager
{
    // ---------------------------------------------------------
    // 1. RÈGLE MÉTIER SIMPLE (Liée au CRUD / Saisie formulaire)
    // ---------------------------------------------------------
    public function validerTransaction(Transaction $transaction): bool
    {
        // Règle 1 : La description ne doit pas être vide
        // On utilise trim() pour s'assurer que l'utilisateur n'a pas tapé que des espaces "   "
        if (empty(trim($transaction->getDescription()))) {
            throw new \InvalidArgumentException('La description est obligatoire');
        }

        // Règle 2 : Le montant doit être strictement positif
        if ($transaction->getMontant() <= 0) {
            throw new \InvalidArgumentException('Le montant doit être strictement positif');
        }

        return true;
    }

    // ---------------------------------------------------------
    // 2. RÈGLE MÉTIER AVANCÉE (Calcul / Stratégie Financière)
    // ---------------------------------------------------------
    public function calculerTauxConsommationBudget(float $depensesTotales, float $budgetLimite): float
    {
        // Règle 3 : Le budget ne peut pas être de 0 (division par zéro interdite)
        if ($budgetLimite <= 0) {
            throw new \LogicException('Le budget limite doit être supérieur à zéro pour calculer un taux.');
        }

        // Calcul du pourcentage : (Dépenses / Limite) * 100
        $taux = ($depensesTotales / $budgetLimite) * 100;

        // On arrondit à 2 chiffres après la virgule pour que ce soit propre
        return round($taux, 2);
    }
}