<?php

namespace App\Tests\Service;

use App\Entity\Commande;
use App\Service\CommandeManager;
use PHPUnit\Framework\TestCase;

class CommandeManagerTest extends TestCase
{
    public function testValidCommande()
    {
        $commande = new Commande();
        $commande->setMontant_total(150);
        $commande->setRemiseCoupon(10); // Remise valide car le total > 100

        $manager = new CommandeManager();
        $this->assertTrue($manager->validate($commande));
    }

    public function testCommandeWithNegativeAmount()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Le montant total d\'une commande ne peut pas être négatif.');

        $commande = new Commande();
        $commande->setMontant_total(-50);

        $manager = new CommandeManager();
        $manager->validate($commande);
    }

    public function testCommandeWithInvalidDiscount()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Une remise ne peut être appliquée que si le montant total dépasse 100.');

        $commande = new Commande();
        $commande->setMontant_total(80);
        $commande->setRemiseCoupon(10); // Invalide car le montant_total <= 100

        $manager = new CommandeManager();
        $manager->validate($commande);
    }

    public function testCommandeWithNegativePoints()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Les points utilisés ne peuvent pas être négatifs.');

        $commande = new Commande();
        $commande->setMontant_total(150);
        $commande->setPointsUtilises(-50); // Invalide

        $manager = new CommandeManager();
        $manager->validate($commande);
    }

    public function testCommandeWithShortCoupon()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Le code de réduction doit contenir au moins 5 caractères.');

        $commande = new Commande();
        $commande->setMontant_total(150);
        $commande->setCouponCode('PRO'); // Trop court (< 5 caractères)

        $manager = new CommandeManager();
        $manager->validate($commande);
    }
}
