<?php

namespace App\Tests\Service;

use App\Entity\Produit;
use App\Service\ProduitManager;
use PHPUnit\Framework\TestCase;

class ProduitManagerTest extends TestCase
{
    public function testValidProduit()
    {
        $produit = new Produit();
        $produit->setNom('Produit Valide');
        $produit->setPrixAchat(10.5);
        $produit->setStockDispo(5);

        $manager = new ProduitManager();
        $this->assertTrue($manager->validate($produit));
    }

    public function testProduitWithInvalidPrice()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Le prix d\'un article doit toujours être supérieur à zéro.');

        $produit = new Produit();
        $produit->setNom('Produit Invalide');
        $produit->setPrixAchat(0);
        $produit->setStockDispo(5);

        $manager = new ProduitManager();
        $manager->validate($produit);
    }

    public function testProduitWithNegativeStock()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('La quantité saisie ne peut pas être négative.');

        $produit = new Produit();
        $produit->setNom('Produit Test');
        $produit->setPrixAchat(10.5);
        $produit->setStockDispo(-2);

        $manager = new ProduitManager();
        $manager->validate($produit);
    }

    public function testProduitWithoutName()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Un champ obligatoire (nom) doit être rempli avant de soumettre le formulaire.');

        $produit = new Produit();
        // Nom vide
        $produit->setNom('');
        $produit->setPrixAchat(10.5);
        $produit->setStockDispo(5);

        $manager = new ProduitManager();
        $manager->validate($produit);
    }

    public function testProduitWithInvalidDiscount()
    {
        $this->expectException(\InvalidArgumentException::class);
        $this->expectExceptionMessage('Le pourcentage de réduction doit être compris entre 0 et 100.');

        $produit = new Produit();
        $produit->setNom('Produit Test');
        $produit->setPrixAchat(10.5);
        $produit->setStockDispo(5);
        $produit->setPourcentageReduction(150); // Invalide

        $manager = new ProduitManager();
        $manager->validate($produit);
    }
}
