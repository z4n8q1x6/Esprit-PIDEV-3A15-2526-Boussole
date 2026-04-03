<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

use App\Entity\Franchises;

#[ORM\Entity]
class Fournisseur
{

    #[ORM\Id]
    #[ORM\Column(type: "integer")]
    private int $id;

    #[ORM\Column(type: "string", length: 255)]
    private string $nom;

    #[ORM\Column(type: "string", length: 100)]
    private string $matricule_fiscal;

    #[ORM\Column(type: "string", length: 20)]
    private string $telephone;

        #[ORM\ManyToOne(targetEntity: Franchises::class, inversedBy: "fournisseurs")]
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

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($value)
    {
        $this->nom = $value;
    }

    public function getMatricule_fiscal()
    {
        return $this->matricule_fiscal;
    }

    public function setMatricule_fiscal($value)
    {
        $this->matricule_fiscal = $value;
    }

    public function getTelephone()
    {
        return $this->telephone;
    }

    public function setTelephone($value)
    {
        $this->telephone = $value;
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
