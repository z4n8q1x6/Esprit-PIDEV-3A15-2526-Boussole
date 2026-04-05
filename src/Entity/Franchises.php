<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use App\Entity\Utilisateur;

#[ORM\Entity]
class Franchises
{
    public function __construct()
    {
        $this->utilisateurs = new ArrayCollection();
    }

    #[ORM\Id]
    #[ORM\GeneratedValue]
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
    public function getDateCreation()
    {
        return $this->date_creation;
    }

    public function setDate_creation($value)
    {
        $this->date_creation = $value;
    }
    public function setDateCreation($value)
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
    public function getSoldeActuel()
    {
        return $this->solde_actuel;
    }

    public function setSolde_actuel($value)
    {
        $this->solde_actuel = $value;
    }
    public function setSoldeActuel($value)
    {
        $this->solde_actuel = $value;
    }

    // Removed missing target entity relationships

    #[ORM\OneToMany(mappedBy: "id_franchise", targetEntity: Utilisateur::class)]
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
