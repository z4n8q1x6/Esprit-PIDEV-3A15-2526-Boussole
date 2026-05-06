<?php
namespace App\Service;

use App\Entity\Commande;

class CommandeManager
{
    public function validate(Commande $commande): bool
    {
        if ($commande->getPointsUtilises() < 0) {
            throw new \InvalidArgumentException('Les points utilisés ne peuvent pas être négatifs.');
        }

        if ($commande->getCouponCode() !== null && strlen($commande->getCouponCode()) < 5) {
            throw new \InvalidArgumentException('Le code de réduction doit contenir au moins 5 caractères.');
        }

        if ($commande->getMontant_total() < 0) {
            throw new \InvalidArgumentException('Le montant total d\'une commande ne peut pas être négatif.');
        }

        if ($commande->getRemiseCoupon() > 0 && $commande->getMontant_total() <= 100) {
            throw new \InvalidArgumentException('Une remise ne peut être appliquée que si le montant total dépasse 100.');
        }

        return true;
    }
}
