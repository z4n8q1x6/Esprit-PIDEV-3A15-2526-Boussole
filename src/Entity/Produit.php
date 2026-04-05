<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\Collection;
use App\Entity\Ligne_commande;
use Symfony\Component\Validator\Constraints as Assert;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;

#[ORM\Entity]
#[UniqueEntity(fields: ['reference'], message: 'Cette référence existe déjà')]
class Produit
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "AUTO")]
    #[ORM\Column(type: "integer")]
    private ?int $id = null;

    #[ORM\Column(type: "string", length: 100)]
    #[Assert\NotBlank(message: "Le nom ne peut pas être vide")]
    #[Assert\Regex(pattern: "/^[^0-9]*$/", message: "Le nom ne doit pas contenir de chiffres")]
    private string $nom;

    #[ORM\Column(type: "string", length: 50)]
    #[Assert\NotBlank(message: "La référence ne peut pas être vide")]
    #[Assert\Regex(pattern: "/^(?!0+$).+/", message: "La référence ne peut pas être uniquement des zéros")]
    private string $reference;

    #[ORM\Column(type: "float")]
    #[Assert\NotBlank(message: "Le prix ne peut pas être vide")]
    #[Assert\Positive(message: "Le prix doit être supérieur à 0")]
    private float $prix_achat;

    #[ORM\Column(type: "integer")]
    private int $stock_dispo;

    #[ORM\Column(type: "string", length: 255, nullable: true)]
    private ?string $image = null;

    #[ORM\OneToMany(mappedBy: "produit_id", targetEntity: Ligne_commande::class, cascade: ["remove"], orphanRemoval: true)]
    private Collection $ligne_commandes;

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

    public function getPrixAchat()
    {
        return $this->prix_achat;
    }

    public function setPrixAchat($value)
    {
        $this->prix_achat = $value;
    }

    public function getStockDispo()
    {
        return $this->stock_dispo;
    }

    public function setStockDispo($value)
    {
        $this->stock_dispo = $value;
    }

    public function getImage(): ?string
    {
        return $this->image;
    }

    public function setImage(?string $image): self
    {
        $this->image = $image;
        return $this;
    }

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
            if ($ligne_commande->getProduit_id() === $this) {
                $ligne_commande->setProduit_id(null);
            }
        }

        return $this;
    }
}