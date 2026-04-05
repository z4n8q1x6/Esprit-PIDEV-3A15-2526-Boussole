<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

use App\Entity\Produit;

#[ORM\Entity]
class Ligne_commande
{

    #[ORM\Id]
    #[ORM\Column(type: "integer")]
    private int $id;

    #[ORM\Column(type: "integer")]
    private int $quantite;

    #[ORM\Column(type: "float")]
    private float $prix_unitaire;

        #[ORM\ManyToOne(targetEntity: Commande::class, inversedBy: "ligne_commandes")]
    #[ORM\JoinColumn(name: 'commande_id', referencedColumnName: 'id', onDelete: 'CASCADE')]
    private Commande $commande_id;

        #[ORM\ManyToOne(targetEntity: Produit::class, inversedBy: "ligne_commandes")]
    #[ORM\JoinColumn(name: 'produit_id', referencedColumnName: 'id', onDelete: 'CASCADE')]
    private Produit $produit_id;

    public function getId()
    {
        return $this->id;
    }

    public function setId($value)
    {
        $this->id = $value;
    }

    public function getQuantite()
    {
        return $this->quantite;
    }

    public function setQuantite($value)
    {
        $this->quantite = $value;
    }

    public function getPrix_unitaire()
    {
        return $this->prix_unitaire;
    }

    public function setPrix_unitaire($value)
    {
        $this->prix_unitaire = $value;
    }

    public function getCommande_id()
    {
        return $this->commande_id;
    }

    public function setCommande_id($value)
    {
        $this->commande_id = $value;
    }

    public function getProduit_id()
    {
        return $this->produit_id;
    }

    public function setProduit_id($value)
    {
        $this->produit_id = $value;
    }
}
