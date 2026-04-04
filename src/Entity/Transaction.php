<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

use App\Entity\Franchises;

#[ORM\Entity]
class Transaction
{

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private int $id;

    #[ORM\Column(type: "date")]
    private \DateTimeInterface $date;

    #[ORM\Column(type: "float")]
    private float $montant;

    #[ORM\Column(type: "string")]
    private string $type;

    #[ORM\Column(type: "string", length: 255)]
    private string $description;

        #[ORM\ManyToOne(targetEntity: Franchises::class, inversedBy: "transactions")]
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
}
