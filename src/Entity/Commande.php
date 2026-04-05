<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

use App\Entity\Franchises;
use Doctrine\Common\Collections\Collection;
use App\Entity\Ligne_commande;

#[ORM\Entity]
class Commande
{

    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: "AUTO")]
    #[ORM\Column(type: "integer")]
    private ?int $id = null;

    #[ORM\Column(type: "datetime")]
    private \DateTimeInterface $date_creation;

    #[ORM\Column(type: "float")]
    private float $montant_total;

    #[ORM\Column(type: "string")]
    private string $statut;

        #[ORM\ManyToOne(targetEntity: Franchises::class, inversedBy: "commandes")]
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

    public function getDate_creation()
    {
        return $this->date_creation;
    }

    public function setDate_creation($value)
    {
        $this->date_creation = $value;
    }

    public function getMontant_total()
    {
        return $this->montant_total;
    }

    public function setMontant_total($value)
    {
        $this->montant_total = $value;
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

    #[ORM\OneToMany(mappedBy: "commande_id", targetEntity: Ligne_commande::class)]
    private Collection $ligne_commandes;

        public function getLigne_commandes(): Collection
        {
            return $this->ligne_commandes;
        }

        public function addLigne_commande(Ligne_commande $ligne_commande): self
        {
            if (!$this->ligne_commandes->contains($ligne_commande)) {
                $this->ligne_commandes[] = $ligne_commande;
                $ligne_commande->setCommande_id($this);
            }

            return $this;
        }

        public function removeLigne_commande(Ligne_commande $ligne_commande): self
        {
            if ($this->ligne_commandes->removeElement($ligne_commande)) {
                // set the owning side to null (unless already changed)
                if ($ligne_commande->getCommande_id() === $this) {
                    $ligne_commande->setCommande_id(null);
                }
            }

            return $this;
        }
}
