<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Franchises;
use Symfony\Component\Validator\Constraints as Assert; // <-- IMPORT OBLIGATOIRE POUR LE CONTRÔLE DE SAISIE

#[ORM\Entity(repositoryClass: \App\Repository\TransactionRepository::class)]
class Transaction
{

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private int $id;

    #[ORM\Column(type: "date")]
    #[Assert\NotBlank(message: "La date est obligatoire.")]
    private ?\DateTimeInterface $date = null;

    #[ORM\Column(type: "float")]
    #[Assert\NotBlank(message: "Le montant est obligatoire.")]
    #[Assert\Positive(message: "Le montant doit être strictement supérieur à 0.")]
    private ?float $montant = null;

    #[ORM\Column(type: "string")]
    // Pas de contrôle ici car c'est le contrôleur qui va forcer ce champ ('RECETTE' ou 'DEPENSE')
    private ?string $type = null;

    #[ORM\Column(type: "string", length: 255)]
    #[Assert\NotBlank(message: "Veuillez entrer une description.")]
    #[Assert\Length(
        min: 3,
        minMessage: "La description doit contenir au moins {{ limit }} caractères."
    )]
    #[Assert\Regex(
        pattern: "/^[A-Za-zÀ-ÿ\s]+$/",
        message: "La description ne doit contenir que des lettres (pas de chiffres)."
    )]
    private ?string $description = null;

    #[ORM\ManyToOne(targetEntity: Franchises::class, inversedBy: "transactions")]
    #[ORM\JoinColumn(name: 'franchise_id', referencedColumnName: 'id', onDelete: 'CASCADE')]
    private Franchises $franchise_id;

    #[ORM\Column(type: "boolean", options: ["default" => false])]
    private bool $est_cloture = false;

    public function getId()
    {
        return $this->id;
    }

    public function setId($value)
    {
        $this->id = $value;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($value)
    {
        $this->date = $value;
    }

    public function getMontant()
    {
        return $this->montant;
    }

    public function setMontant($value)
    {
        $this->montant = $value;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($value)
    {
        $this->type = $value;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($value)
    {
        $this->description = $value;
    }

    public function getFranchise_id()
    {
        return $this->franchise_id;
    }

    public function setFranchise_id($value)
    {
        $this->franchise_id = $value;
    }

    public function getEstCloture(): bool
    {
        return $this->est_cloture;
    }

    public function isEstCloture(): bool
    {
        return $this->est_cloture;
    }

    public function setEstCloture(bool $est_cloture): self
    {
        $this->est_cloture = $est_cloture;
        return $this;
    }
}