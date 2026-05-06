<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use App\Entity\Utilisateur;

#[ORM\Entity]
class Franchises
{
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'AUTO')]
    #[ORM\Column(type: "integer")]
    private ?int $id = null;

    #[ORM\Column(type: "string", length: 100)]
    private string $nom;

    #[ORM\Column(type: "string", length: 100)]
    private string $email;

    #[ORM\Column(type: "string", length: 20)]
    private string $telephone;

    #[ORM\Column(type: "string", length: 200)]
    private string $adresse;

    #[ORM\Column(type: "datetime")]
    private \DateTimeInterface $date_creation;

    #[ORM\Column(type: "boolean")]
    private bool $actif;

    #[ORM\Column(type: "float")]
    private float $solde_actuel;

    #[ORM\Column(type: "integer", options: ["default" => 0])]
    private int $points_fidelite = 0;

    public function getId(): ?int
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

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($value)
    {
        $this->email = $value;
    }

    public function getTelephone()
    {
        return $this->telephone;
    }

    public function setTelephone($value)
    {
        $this->telephone = $value;
    }

    public function getAdresse()
    {
        return $this->adresse;
    }

    public function setAdresse($value)
    {
        $this->adresse = $value;
    }

    public function getDate_creation()
    {
        return $this->date_creation;
    }

    public function setDate_creation($value)
    {
        $this->date_creation = $value;
    }

    public function getActif()
    {
        return $this->actif;
    }

    public function setActif($value)
    {
        $this->actif = $value;
    }

    public function getSolde_actuel()
    {
        return $this->solde_actuel;
    }

    public function setSolde_actuel($value)
    {
        $this->solde_actuel = $value;
    }

    public function getPointsFidelite(): int
    {
        return $this->points_fidelite;
    }

    public function setPointsFidelite(int $points_fidelite): self
    {
        $this->points_fidelite = $points_fidelite;
        return $this;
    }

    #[ORM\OneToMany(mappedBy: "franchise_id", targetEntity: Alerteias::class, orphanRemoval: true)]
    private Collection $alerteiass;

    public function getAlerteiass(): Collection
    {
        return $this->alerteiass;
    }

    public function addAlerteias(Alerteias $alerteias): self
    {
        if (!$this->alerteiass->contains($alerteias)) {
            $this->alerteiass[] = $alerteias;
            $alerteias->setFranchise_id($this);
        }

        return $this;
    }

    public function removeAlerteias(Alerteias $alerteias): self
    {
        if ($this->alerteiass->removeElement($alerteias)) {
            // set the owning side to null (unless already changed)
            if ($alerteias->getFranchise_id() === $this) {
                $alerteias->setFranchise_id(null);
            }
        }

        return $this;
    }

    #[ORM\OneToMany(mappedBy: "franchise_id", targetEntity: Bilan::class, orphanRemoval: true)]
    private Collection $bilans;

    #[ORM\OneToMany(mappedBy: "franchise_id", targetEntity: Budget_previsionnel::class, orphanRemoval: true)]
    private Collection $budget_previsionnels;

    #[ORM\OneToMany(mappedBy: "franchise_id", targetEntity: Charge::class, orphanRemoval: true)]
    private Collection $charges;

    #[ORM\OneToMany(mappedBy: "franchise_id", targetEntity: Commande::class, orphanRemoval: true)]
    private Collection $commandes;

    #[ORM\OneToMany(mappedBy: "franchise_id", targetEntity: Fournisseur::class, orphanRemoval: true)]
    private Collection $fournisseurs;

    #[ORM\OneToMany(mappedBy: "franchise_id", targetEntity: Pret::class, orphanRemoval: true)]
    private Collection $prets;

    #[ORM\OneToMany(mappedBy: "franchise_id", targetEntity: Reclamations::class, orphanRemoval: true)]
    private Collection $reclamationss;

    #[ORM\OneToMany(mappedBy: "franchise_id", targetEntity: Transaction::class, orphanRemoval: true)]
    private Collection $transactions;

    #[ORM\OneToMany(mappedBy: "id_franchise", targetEntity: Utilisateur::class, orphanRemoval: true)]
    private Collection $utilisateurs;

    public function getUtilisateurs(): Collection
    {
        return $this->utilisateurs;
    }

    public function addUtilisateur(Utilisateur $utilisateur): self
    {
        if (!$this->utilisateurs->contains($utilisateur)) {
            $this->utilisateurs[] = $utilisateur;
            $utilisateur->setId_franchise($this);
        }

        return $this;
    }

    public function removeUtilisateur(Utilisateur $utilisateur): self
    {
        if ($this->utilisateurs->removeElement($utilisateur)) {
            // set the owning side to null (unless already changed)
            if ($utilisateur->getId_franchise() === $this) {
                $utilisateur->setId_franchise(null);
            }
        }

        return $this;
    }
}
