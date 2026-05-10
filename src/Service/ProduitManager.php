<?php
namespace App\Service;

use App\Entity\Produit;

class ProduitManager
{
    public function validate(Produit $produit): bool
    {
        if (empty($produit->getNom())) {
            throw new \InvalidArgumentException('Un champ obligatoire (nom) doit être rempli avant de soumettre le formulaire.');
        }

        if ($produit->getPourcentageReduction() > 100 || $produit->getPourcentageReduction() < 0) {
            throw new \InvalidArgumentException('Le pourcentage de réduction doit être compris entre 0 et 100.');
        }

        if ($produit->getPrixAchat() <= 0) {
            throw new \InvalidArgumentException('Le prix d\'un article doit toujours être supérieur à zéro.');
        }

        if ($produit->getStockDispo() < 0) {
            throw new \InvalidArgumentException('La quantité saisie ne peut pas être négative.');
        }

        return true;
    }
}
