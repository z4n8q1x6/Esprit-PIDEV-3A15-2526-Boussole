<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Franchises;

#[ORM\Entity]
class Utilisateur
{
    #[ORM\Id]
    #[ORM\Column(type: "integer")]
    private int $id_user;

    #[ORM\Column(type: "string", length: 50)]
    private string $nom;

    #[ORM\Column(type: "string", length: 50)]
    private string $prenom;

    #[ORM\Column(type: "string", length: 100)]
    private string $email;

    #[ORM\Column(type: "string", length: 255)]
    private string $mot_de_passe;

    #[ORM\Column(type: "string")]
    private string $role;

    #[ORM\Column(type: "boolean")]
    private bool $actif;

    #[ORM\Column(type: "datetime")]
    private \DateTimeInterface $date_creation;

    #[ORM\ManyToOne(targetEntity: Franchises::class, inversedBy: "utilisateurs")]
    #[ORM\JoinColumn(name: 'id_franchise', referencedColumnName: 'id', onDelete: 'CASCADE')]
    private Franchises $id_franchise;

    #[ORM\Column(type: "text", nullable: true)]
    private string $face_token;

    public function getId_user()
    {
        return $this->id_user;
    }

    public function setId_user($value)
    {
        $this->id_user = $value;
    }

    public function getNom()
    {
        return $this->nom;
    }

    public function setNom($value)
    {
        $this->nom = $value;
    }

    public function getPrenom()
    {
        return $this->prenom;
    }

    public function setPrenom($value)
    {
        $this->prenom = $value;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($value)
    {
        $this->email = $value;
    }

    public function getMot_de_passe()
    {
        return $this->mot_de_passe;
    }

    public function setMot_de_passe($value)
    {
        $this->mot_de_passe = $value;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function setRole($value)
    {
        $this->role = $value;
    }

    public function getActif()
    {
        return $this->actif;
    }

    public function setActif($value)
    {
        $this->actif = $value;
    }

    public function getDate_creation()
    {
        return $this->date_creation;
    }

    public function setDate_creation($value)
    {
        $this->date_creation = $value;
    }

    public function getId_franchise()
    {
        return $this->id_franchise;
    }

    public function setId_franchise($value)
    {
        $this->id_franchise = $value;
    }

    public function getFace_token()
    {
        return $this->face_token;
    }

    public function setFace_token($value)
    {
        $this->face_token = $value;
    }
}
