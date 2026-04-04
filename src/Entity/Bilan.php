<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

use App\Entity\Franchises;

#[ORM\Entity]
class Bilan
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
    private float $total_recettes;

    #[ORM\Column(type: "float")]
    private float $total_charges;

    #[ORM\Column(type: "float")]
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
}
