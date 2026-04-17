<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Franchises;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

#[ORM\Entity]
class Utilisateur implements UserInterface, PasswordAuthenticatedUserInterface
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private ?int $id_user = null;

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
    #[ORM\JoinColumn(name: 'id_franchise', referencedColumnName: 'id', nullable: true, onDelete: 'CASCADE')]
    private ?Franchises $id_franchise = null;

    #[ORM\Column(type: "text", nullable: true)]
    private ?string $face_token = null;

    #[ORM\Column(type: "string", length: 255, nullable: true)]
    private ?string $google_id = null;

    #[ORM\Column(type: "text", nullable: true)]
    private ?string $google_access_token = null;

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

    public function getId_franchise(): ?Franchises
    {
        return $this->id_franchise;
    }
    public function getIdFranchise(): ?Franchises // Alias for Symfony Form PropertyAccessor
    {
        return $this->id_franchise;
    }

    public function setId_franchise(?Franchises $value): self
    {
        $this->id_franchise = $value;
        return $this;
    }
    public function setIdFranchise(?Franchises $value): self // Alias for Symfony Form PropertyAccessor
    {
        $this->id_franchise = $value;
        return $this;
    }

    public function getFace_token()
    {
        return $this->face_token;
    }

    public function setFace_token($value)
    {
        $this->face_token = $value;
    }

    public function getGoogle_id(): ?string
    {
        return $this->google_id;
    }

    public function setGoogle_id(?string $google_id): self
    {
        $this->google_id = $google_id;
        return $this;
    }

    public function getGoogle_access_token(): ?string
    {
        return $this->google_access_token;
    }

    public function setGoogle_access_token(?string $google_access_token): self
    {
        $this->google_access_token = $google_access_token;
        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roleStr = $this->role ?? '';
        $roles = ['ROLE_USER'];

        if ($roleStr !== '') {
            $roles[] = $roleStr;
        }

        // Normalize persisted enum roles to Symfony-style role names used elsewhere in the app.
        if ($roleStr === 'SIEGE') {
            $roles[] = 'ROLE_ADMIN';
        }

        if ($roleStr === 'ENTREPRISE') {
            $roles[] = 'ROLE_ENTREPRISE';
        }

        return array_unique($roles);
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->mot_de_passe;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials(): void
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }
}
