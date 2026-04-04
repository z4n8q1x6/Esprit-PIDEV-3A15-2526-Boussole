<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Franchises;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity]
class Bilan
{

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private int $id;

    #[ORM\Column(type: "integer")]
    #[Assert\NotBlank(message: "Le mois est obligatoire.")]
    #[Assert\Range(min: 1, max: 12, notInRangeMessage: "Le mois doit être compris entre {{ min }} et {{ max }}")]
    private int $mois;

    #[ORM\Column(type: "integer")]
    #[Assert\NotBlank(message: "L'année est obligatoire.")]
    #[Assert\GreaterThanOrEqual(value: 2024, message: "L'année doit être supérieure ou égale à 2024")]
    private int $annee;

    #[ORM\Column(type: "float")]
    #[Assert\NotBlank(message: "Le total des recettes est obligatoire.")]
    #[Assert\PositiveOrZero(message: "Le total des recettes doit être positif ou nul.")]
    private float $total_recettes;

    #[ORM\Column(type: "float")]
    #[Assert\NotBlank(message: "Le total des charges est obligatoire.")]
    #[Assert\PositiveOrZero(message: "Le total des charges doit être positif ou nul.")]
    private float $total_charges;

    #[ORM\Column(type: "float")]
    #[Assert\Type(type: "numeric", message: "Le résultat net doit être un nombre.")]
    private float $resultat_net;

        #[ORM\ManyToOne(targetEntity: Franchises::class, inversedBy: "bilans")]
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

    public function getMois()
    {
        return $this->mois;
    }

    public function setMois($value)
    {
        $this->mois = $value;
    }

    public function getAnnee()
    {
        return $this->annee;
    }

    public function setAnnee($value)
    {
        $this->annee = $value;
    }

    public function getTotal_recettes()
    {
        return $this->total_recettes;
    }

    public function setTotal_recettes($value)
    {
        $this->total_recettes = $value;
    }

    public function getTotal_charges()
    {
        return $this->total_charges;
    }

    public function setTotal_charges($value)
    {
        $this->total_charges = $value;
    }

    public function getResultat_net()
    {
        return $this->resultat_net;
    }

    public function setResultat_net($value)
    {
        $this->resultat_net = $value;
    }

    public function getFranchise_id()
    {
        return $this->franchise_id;
    }

    public function setFranchise_id($value)
    {
        $this->franchise_id = $value;
    }

    // Alias pour la logique de formulaires Symfony (camelCase)
    public function getTotalRecettes() { return $this->total_recettes; }
    public function setTotalRecettes($value) { $this->total_recettes = $value; }
    public function getTotalCharges() { return $this->total_charges; }
    public function setTotalCharges($value) { $this->total_charges = $value; }
    public function getResultatNet() { return $this->resultat_net; }
    public function setResultatNet($value) { $this->resultat_net = $value; }
    public function getFranchiseId() { return $this->franchise_id; }
    public function setFranchiseId($value) { $this->franchise_id = $value; }
}
