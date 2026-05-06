<?php

namespace App\Tests;

use App\Entity\Transaction;
use App\Service\TransactionManager;
use PHPUnit\Framework\TestCase;

class TransactionManagerTest extends TestCase
{
    // ========================================================
    // TESTS SUR LE CRUD (Règles de validation)
    // ========================================================

    // 1. Cas de Réussite parfait
    public function testValiderTransactionReussite(): void
    {
        $transaction = new Transaction();
        $transaction->setDescription('Achat de fournitures');
        $transaction->setMontant(150.0);

        $manager = new TransactionManager();
        $this->assertTrue($manager->validerTransaction($transaction));
    }

    // 2. Cas d'échec : Montant négatif
    public function testValiderTransactionEchecMontantNegatif(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Le montant doit être strictement positif');

        $transaction = new Transaction();
        $transaction->setDescription('Erreur');
        $transaction->setMontant(-50.0);

        $manager = new TransactionManager();
        $manager->validerTransaction($transaction);
    }

    // 3. Cas d'échec : Montant égal à zéro (Nouveau !)
    public function testValiderTransactionEchecMontantZero(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Le montant doit être strictement positif');

        $transaction = new Transaction();
        $transaction->setDescription('Erreur Zero');
        $transaction->setMontant(0.0); // 0 n'est pas strictement positif

        $manager = new TransactionManager();
        $manager->validerTransaction($transaction);
    }

    // 4. Cas d'échec : Description complètement vide (Nouveau !)
    public function testValiderTransactionEchecDescriptionVide(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('La description est obligatoire');

        $transaction = new Transaction();
        $transaction->setDescription(''); // Chaine vide
        $transaction->setMontant(100.0);

        $manager = new TransactionManager();
        $manager->validerTransaction($transaction);
    }

    // 5. Cas d'échec : Description avec seulement des espaces (Nouveau !)
    public function testValiderTransactionEchecDescriptionEspaces(): void
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('La description est obligatoire');

        $transaction = new Transaction();
        $transaction->setDescription('     '); // Juste des espaces
        $transaction->setMontant(100.0);

        $manager = new TransactionManager();
        
        // Attention : il faut que ton service gère ça ! On va le modifier juste après.
        $manager->validerTransaction($transaction);
    }

    // ========================================================
    // TESTS SUR LE MÉTIER AVANCÉ (Calcul de pourcentage)
    // ========================================================

    // 6. Cas de Réussite (Calcul normal)
    public function testCalculerTauxConsommationBudgetReussite(): void
    {
        $manager = new TransactionManager();
        $tauxCalcule = $manager->calculerTauxConsommationBudget(250.0, 1000.0);
        $this->assertEquals(25.0, $tauxCalcule);
    }

    // 7. Cas d'échec (Budget = 0)
    public function testCalculerTauxConsommationBudgetEchecBudgetZero(): void
    {
        $this->expectException(\LogicException::class);
        $this->expectExceptionMessage('Le budget limite doit être supérieur à zéro');

        $manager = new TransactionManager();
        $manager->calculerTauxConsommationBudget(250.0, 0.0);
    }
}