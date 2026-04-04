<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

use App\Entity\Franchises;

#[ORM\Entity]
class Budget_previsionnel
{

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private int $id;

    #[ORM\Column(type: "integer")]
    private int $mois;

    #[ORM\Column(type: "integer")]
    private int $annee;

    #[ORM\Column(type: "float")]
    private float $montant_cible;

    #[ORM\Column(type: "string")]
    private string $type_budget;

    #[ORM\Column(type: "string", length: 100)]
    private string $categorie;

        #[ORM\ManyToOne(targetEntity: Franchises::class, inversedBy: "budget_previsionnels")]
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

    public function getMontant_cible()
    {
        return $this->montant_cible;
    }

    public function setMontant_cible($value)
    {
        $this->montant_cible = $value;
    }

    public function getType_budget()
    {
        return $this->type_budget;
    }

    public function setType_budget($value)
    {
        $this->type_budget = $value;
    }

    public function getCategorie()
    {
        return $this->categorie;
    }

    public function setCategorie($value)
    {
        $this->categorie = $value;
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
