<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

use App\Entity\Franchises;
use Doctrine\Common\Collections\Collection;
use App\Entity\Mensualite;

#[ORM\Entity]
class Pret
{

    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'AUTO')]
    #[ORM\Column(type: "integer")]
    private int $id;

    #[ORM\Column(type: "float")]
    private float $montant_demande;

    #[ORM\Column(type: "integer")]
    private int $duree_mois;

    #[ORM\Column(type: "string")]
    private string $taux;

    #[ORM\Column(type: "text")]
    private string $motif;

    #[ORM\Column(type: "datetime")]
    private \DateTimeInterface $date_demande;

    #[ORM\Column(type: "string")]
    private string $statut;

    #[ORM\ManyToOne(targetEntity: Franchises::class, inversedBy: "prets")]
    #[ORM\JoinColumn(name: 'franchise_id', referencedColumnName: 'id', nullable: false, onDelete: 'CASCADE')]
    private Franchises $franchise_id;

    public function getId()
    {
        return $this->id;
    }

    public function setId($value)
    {
        $this->id = $value;
    }

    public function getMontant_demande()
    {
        return $this->montant_demande;
    }

    public function setMontant_demande($value)
    {
        $this->montant_demande = $value;
    }

    public function getDuree_mois()
    {
        return $this->duree_mois;
    }

    public function setDuree_mois($value)
    {
        $this->duree_mois = $value;
    }

    public function getTaux()
    {
        return $this->taux;
    }

    public function setTaux($value)
    {
        $this->taux = $value;
    }

    public function getMotif()
    {
        return $this->motif;
    }

    public function setMotif($value)
    {
        $this->motif = $value;
    }

    public function getDate_demande()
    {
        return $this->date_demande;
    }

    public function setDate_demande($value)
    {
        $this->date_demande = $value;
    }

    public function getStatut()
    {
        return $this->statut;
    }

    public function setStatut($value)
    {
        $this->statut = $value;
    }

    public function getFranchise_id()
    {
        return $this->franchise_id;
    }

    public function setFranchise_id($value)
    {
        $this->franchise_id = $value;
    }

    #[ORM\OneToMany(mappedBy: "pret_id", targetEntity: Mensualite::class)]
    private Collection $mensualites;
}
