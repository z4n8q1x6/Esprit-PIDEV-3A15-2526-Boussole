<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

use App\Entity\Pret;

#[ORM\Entity]
class Mensualite
{

    #[ORM\Id]
    #[ORM\Column(type: "integer")]
    private int $id;

    #[ORM\Column(type: "date")]
    private \DateTimeInterface $date_echeance;

    #[ORM\Column(type: "float")]
    private float $montant;

    #[ORM\Column(type: "boolean")]
    private bool $est_paye;

        #[ORM\ManyToOne(targetEntity: Pret::class, inversedBy: "mensualites")]
    #[ORM\JoinColumn(name: 'pret_id', referencedColumnName: 'id', onDelete: 'CASCADE')]
    private Pret $pret_id;

    public function getId()
    {
        return $this->id;
    }

    public function setId($value)
    {
        $this->id = $value;
    }

    public function getDate_echeance()
    {
        return $this->date_echeance;
    }

    public function setDate_echeance($value)
    {
        $this->date_echeance = $value;
    }

    public function getMontant()
    {
        return $this->montant;
    }

    public function setMontant($value)
    {
        $this->montant = $value;
    }

    public function getEst_paye()
    {
        return $this->est_paye;
    }

    public function setEst_paye($value)
    {
        $this->est_paye = $value;
    }

    public function getPret_id()
    {
        return $this->pret_id;
    }

    public function setPret_id($value)
    {
        $this->pret_id = $value;
    }
}
