<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Entity\Charge;
use App\Service\ChargeManager;

class ChargeManagerTest extends TestCase
{
    // ✅ Test 1: Valid charge
    public function testValidCharge()
    {
        $charge = new Charge();
        $charge->setTitre('Loyer Bureau');
        $charge->setMontant(1200.50);
        $charge->setType('FIXE');
        $charge->setDateCharge(new \DateTime('yesterday'));

        $manager = new ChargeManager();
        $this->assertTrue($manager->validate($charge));
    }

    // ❌ Test 2: Empty titre
    public function testChargeWithoutTitre()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Le titre est obligatoire');

        $charge = new Charge();
        $charge->setTitre('');
        $charge->setMontant(100);
        $charge->setType('FIXE');

        $manager = new ChargeManager();
        $manager->validate($charge);
    }

    // ❌ Test 3: Titre starts with a number
    public function testChargeTitreStartsWithNumber()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Le titre ne peut pas commencer par un chiffre');

        $charge = new Charge();
        $charge->setTitre('1er paiement');
        $charge->setMontant(100);
        $charge->setType('FIXE');

        $manager = new ChargeManager();
        $manager->validate($charge);
    }

    // ❌ Test 4: Negative amount
    public function testChargeWithNegativeAmount()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Le montant doit être un nombre positif');

        $charge = new Charge();
        $charge->setTitre('Achat matériel');
        $charge->setMontant(-50.0);
        $charge->setType('VARIABLE');

        $manager = new ChargeManager();
        $manager->validate($charge);
    }

    // ❌ Test 5: Future date
    public function testChargeWithFutureDate()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('La date de la charge ne peut pas être dans le futur');

        $charge = new Charge();
        $charge->setTitre('Achat matériel');
        $charge->setMontant(100);
        $charge->setType('VARIABLE');
        $charge->setDateCharge(new \DateTime('tomorrow'));

        $manager = new ChargeManager();
        $manager->validate($charge);
    }

    // ❌ Test 6: Invalid type
    public function testChargeWithInvalidType()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Le type de charge doit être FIXE ou VARIABLE');

        $charge = new Charge();
        $charge->setTitre('Achat matériel');
        $charge->setMontant(100);
        $charge->setType('AUTRE'); // Invalid type

        $manager = new ChargeManager();
        $manager->validate($charge);
    }

    /**
     * 📊 TEST MÉTIER AVANCÉ : Scoring de priorité (Ancienneté + Statut)
     */
    public function testCalculatePriorityScore()
    {
        $manager = new ChargeManager();

        // Cas 1 : Charge de 10 jours, Validée (10 * 1.4 = 14)
        $charge1 = new Charge();
        $charge1->setDateCharge(new \DateTime('-10 days'));
        $charge1->setStatusValidation('Validé');
        $this->assertEquals(14, $manager->calculatePriorityScore($charge1));

        // Cas 2 : Charge de 10 jours, En attente (10 * 1.2 = 12)
        $charge2 = new Charge();
        $charge2->setDateCharge(new \DateTime('-10 days'));
        $charge2->setStatusValidation('En attente');
        $this->assertEquals(12, $manager->calculatePriorityScore($charge2));

        // Cas 3 : Charge de 10 jours, Autre statut (Score = 10)
        $charge3 = new Charge();
        $charge3->setDateCharge(new \DateTime('-10 days'));
        $charge3->setStatusValidation('Refusé');
        $this->assertEquals(10, $manager->calculatePriorityScore($charge3));
    }
}
