<?php

namespace App\Entity;

use App\Repository\FournisseurRepository; // Optionnel si tu as un repo
use Doctrine\ORM\Mapping as ORM;
use App\Entity\Franchises;

#[ORM\Entity]
class Fournisseur
{
    #[ORM\Id]
    // Pas de GeneratedValue ici pour permettre l'ID manuel (comme pour Charge)
    #[ORM\Column(type: "integer")]
    private int $id;

    #[ORM\Column(type: "string", length: 255)]
    private string $nom;

    #[ORM\Column(type: "string", length: 100, nullable: true)]
    private ?string $matricule_fiscal = null;

    #[ORM\Column(type: "string", length: 20, nullable: true)]
    private ?string $telephone = null;

    #[ORM\ManyToOne(targetEntity: Franchises::class, inversedBy: "fournisseurs")]
    #[ORM\JoinColumn(name: 'franchise_id', referencedColumnName: 'id', onDelete: 'CASCADE', nullable: false)]
    private Franchises $franchise_id;

    // --- GETTERS & SETTERS ---

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    public function getNom(): string
    {
        return $this->nom;
    }

    public function setNom(string $nom): self
    {
        $this->nom = $nom;
        return $this;
    }

    public function getMatriculeFiscal(): ?string
    {
        return $this->matricule_fiscal;
    }

    public function setMatriculeFiscal(?string $matricule_fiscal): self
    {
        $this->matricule_fiscal = $matricule_fiscal;
        return $this;
    }

    public function getTelephone(): ?string
    {
        return $this->telephone;
    }

    public function setTelephone(?string $telephone): self
    {
        $this->telephone = $telephone;
        return $this;
    }

    public function getFranchiseId(): Franchises
    {
        return $this->franchise_id;
    }

    public function setFranchiseId(Franchises $franchise_id): self
    {
        $this->franchise_id = $franchise_id;
        return $this;
    }
}