<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\Collection;
use App\Entity\Ligne_commande;

#[ORM\Entity]
class Produit
{

    #[ORM\Id]
    #[ORM\Column(type: "integer")]
    private int $id;

    #[ORM\Column(type: "string", length: 100)]
    private string $nom;

    #[ORM\Column(type: "string", length: 50)]
    private string $reference;

    #[ORM\Column(type: "float")]
    private float $prix_achat;

    #[ORM\Column(type: "integer")]
    private int $stock_dispo;

    #[ORM\Column(type: "string", length: 255)]
    private string $image;

    public function getId()
    {
        return $this->id;
    }

    public function setId($value)
    {
        $this->id = $value;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($value)
    {
        $this->nom = $value;
    }

    public function getReference()
    {
        return $this->reference;
    }

    public function setReference($value)
    {
        $this->reference = $value;
    }

    public function getPrix_achat()
    {
        return $this->prix_achat;
    }

    public function setPrix_achat($value)
    {
        $this->prix_achat = $value;
    }

    public function getStock_dispo()
    {
        return $this->stock_dispo;
    }

    public function setStock_dispo($value)
    {
        $this->stock_dispo = $value;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($value)
    {
        $this->image = $value;
    }

    #[ORM\OneToMany(mappedBy: "produit_id", targetEntity: Ligne_commande::class)]
    private Collection $ligne_commandes;

        public function getLigne_commandes(): Collection
        {
            return $this->ligne_commandes;
        }

        public function addLigne_commande(Ligne_commande $ligne_commande): self
        {
            if (!$this->ligne_commandes->contains($ligne_commande)) {
                $this->ligne_commandes[] = $ligne_commande;
                $ligne_commande->setProduit_id($this);
            }

            return $this;
        }

        public function removeLigne_commande(Ligne_commande $ligne_commande): self
        {
            if ($this->ligne_commandes->removeElement($ligne_commande)) {
                // set the owning side to null (unless already changed)
                if ($ligne_commande->getProduit_id() === $this) {
                    $ligne_commande->setProduit_id(null);
                }
            }

            return $this;
        }
}
