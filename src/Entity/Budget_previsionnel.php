<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Franchises;
use Symfony\Component\Validator\Constraints as Assert;

#[ORM\Entity]
class Budget_previsionnel
{

    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private int $id;

    #[ORM\Column(type: "integer")]
    #[Assert\NotBlank(message: "Le mois est obligatoire.")]
    #[Assert\Range(min: 1, max: 12, notInRangeMessage: "Le mois doit ÃƒÂªtre compris entre {{ min }} et {{ max }}")]
    private int $mois;

    #[ORM\Column(type: "integer")]
    #[Assert\NotBlank(message: "L'annÃƒÂ©e est obligatoire.")]
    #[Assert\GreaterThanOrEqual(value: 2024, message: "L'annÃƒÂ©e doit ÃƒÂªtre supÃƒÂ©rieure ou ÃƒÂ©gale ÃƒÂ  2024")]
    private int $annee;

    #[ORM\Column(type: "float")]
    #[Assert\NotBlank(message: "Le montant est obligatoire.")]
    #[Assert\Positive(message: "Le montant ciblÃƒÂ© doit ÃƒÂªtre un nombre positif.")]
    private float $montant_cible;

    #[ORM\Column(type: "string")]
    #[Assert\NotBlank(message: "Le type de budget est obligatoire.")]
    #[Assert\Choice(choices: ['LIMITE_DEPENSE', 'OBJECTIF_REVENU'], message: "Le type doit ÃƒÂªtre 'LIMITE_DEPENSE' ou 'OBJECTIF_REVENU'.")]
    private string $type_budget;

    #[ORM\Column(type: "string", length: 100)]
    #[Assert\NotBlank(message: "La catÃƒÂ©gorie est obligatoire.")]
    private string $categorie;

        #[ORM\ManyToOne(targetEntity: Franchises::class, inversedBy: "budget_previsionnels")]
    #[ORM\JoinColumn(name: 'franchise_id', referencedColumnName: 'id', nullable: true, onDelete: 'CASCADE')]
    private ?Franchises $franchise_id = null;

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

    // Alias pour la logique de formulaires Symfony (camelCase)
    public function getMontantCible() { return $this->montant_cible; }
    public function setMontantCible($value) { $this->montant_cible = $value; }
    public function getTypeBudget() { return $this->type_budget; }
    public function setTypeBudget($value) { $this->type_budget = $value; }
    public function getFranchiseId() { return $this->franchise_id; }
    public function setFranchiseId($value) { $this->franchise_id = $value; }
}
