<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Franchises;

#[ORM\Entity]
class Charge
{
    #[ORM\Id]
    // MODIFICATION : J'ai supprimé #[ORM\GeneratedValue] ici.
    // Cela permet à Symfony d'accepter l'ID que nous générons dans le contrôleur.
    #[ORM\Column(type: "integer")]
    private int $id;

    #[ORM\Column(type: "string", length: 255)]
    private string $titre;

    #[ORM\Column(type: "float")]
    private float $montant;

    #[ORM\Column(type: "date")]
    private ?\DateTimeInterface $date_charge = null;

    #[ORM\Column(type: "string")]
    private string $type;

    #[ORM\Column(type: "string", length: 255)]
    private string $preuve_image;

    #[ORM\Column(type: "string")]
    private string $status_validation;

    #[ORM\ManyToOne(targetEntity: Franchises::class, inversedBy: "charges")]
    #[ORM\JoinColumn(name: 'franchise_id', referencedColumnName: 'id', onDelete: 'CASCADE')]
    private Franchises $franchise_id;

    // --- GETTERS & SETTERS ---

    public function getId(): int 
    { 
        return $this->id; 
    }

    // Le setId est maintenant OBLIGATOIRE car nous gérons l'ID à la main
    public function setId(int $id): self 
    { 
        $this->id = $id; 
        return $this; 
    }

    public function getTitre(): string 
    { 
        return $this->titre; 
    }

    public function setTitre(string $titre): self 
    { 
        $this->titre = $titre; 
        return $this; 
    }

    public function getMontant(): float 
    { 
        return $this->montant; 
    }

    public function setMontant(float $montant): self 
    { 
        $this->montant = $montant; 
        return $this; 
    }

    public function getDateCharge(): ?\DateTimeInterface 
    { 
        return $this->date_charge; 
    }

    public function setDateCharge(?\DateTimeInterface $date_charge): self 
    { 
        $this->date_charge = $date_charge; 
        return $this; 
    }

    public function getType(): string 
    { 
        return $this->type; 
    }

    public function setType(string $type): self 
    { 
        $this->type = $type; 
        return $this; 
    }

    public function getPreuveImage(): string 
    { 
        return $this->preuve_image; 
    }

    public function setPreuveImage(string $preuve_image): self 
    { 
        $this->preuve_image = $preuve_image; 
        return $this; 
    }

    public function getStatusValidation(): string 
    { 
        return $this->status_validation; 
    }

    public function setStatusValidation(string $status_validation): self 
    { 
        $this->status_validation = $status_validation; 
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