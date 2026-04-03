<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

use App\Entity\Franchises;

#[ORM\Entity]
class Charge
{

    #[ORM\Id]
    #[ORM\Column(type: "integer")]
    private int $id;

    #[ORM\Column(type: "string", length: 255)]
    private string $titre;

    #[ORM\Column(type: "float")]
    private float $montant;

    #[ORM\Column(type: "date")]
    private \DateTimeInterface $date_charge;

    #[ORM\Column(type: "string")]
    private string $type;

    #[ORM\Column(type: "string", length: 255)]
    private string $preuve_image;

    #[ORM\Column(type: "string")]
    private string $status_validation;

        #[ORM\ManyToOne(targetEntity: Franchises::class, inversedBy: "charges")]
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

    public function getTitre()
    {
        return $this->titre;
    }

    public function setTitre($value)
    {
        $this->titre = $value;
    }

    public function getMontant()
    {
        return $this->montant;
    }

    public function setMontant($value)
    {
        $this->montant = $value;
    }

    public function getDate_charge()
    {
        return $this->date_charge;
    }

    public function setDate_charge($value)
    {
        $this->date_charge = $value;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($value)
    {
        $this->type = $value;
    }

    public function getPreuve_image()
    {
        return $this->preuve_image;
    }

    public function setPreuve_image($value)
    {
        $this->preuve_image = $value;
    }

    public function getStatus_validation()
    {
        return $this->status_validation;
    }

    public function setStatus_validation($value)
    {
        $this->status_validation = $value;
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
