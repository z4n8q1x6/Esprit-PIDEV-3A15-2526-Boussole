<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Franchises;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity]
class Reclamations
{
    public function __construct()
    {
        $this->statut = 'EN_ATTENTE';
        $this->date_creation = new \DateTime();
    }
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'AUTO')]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\Column(type: "string", length: 255)]
    #[Assert\NotBlank(message: "Ce champ ne peut pas être vide.")]
    #[Assert\Regex(
        pattern: "/^\d/",
        match: false,
        message: "Le sujet ne peut pas commencer par un chiffre."
    )]
    private string $sujet;

    #[ORM\Column(type: "text")]
    #[Assert\NotBlank(message: "Ce champ ne peut pas être vide.")]
    #[Assert\Length(
        min: 5,
        minMessage: "La description doit contenir au moins {{ limit }} caractères."
    )]
    private string $description;

    #[ORM\Column(type: "string", length: 50)]
    private string $statut;

    #[ORM\Column(type: "datetime")]
    private \DateTimeInterface $date_creation;

    #[ORM\ManyToOne(targetEntity: Franchises::class, inversedBy: "reclamationss")]
    #[ORM\JoinColumn(name: 'franchise_id', referencedColumnName: 'id', onDelete: 'CASCADE')]
    private Franchises $franchise_id;

    public function getId()
    {
        return $this->id;
    }

    public function setId($value)
    {
        $this->id = $value;
    }

    public function getSujet()
    {
        return $this->sujet;
    }

    public function setSujet($value)
    {
        $this->sujet = $value;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($value)
    {
        $this->description = $value;
    }

    public function getStatut()
    {
        return $this->statut;
    }

    public function setStatut($value)
    {
        $this->statut = $value;
    }

    public function getDate_creation()
    {
        return $this->date_creation;
    }

    public function setDateCreation($value)
    {
        $this->date_creation = $value;
    }

    public function getFranchise_id()
    {
        return $this->franchise_id;
    }

    public function setFranchise_id($value)
    {
        $this->franchise_id = $value;
    }
}
