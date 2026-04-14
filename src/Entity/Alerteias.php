<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use App\Entity\Franchises;

#[ORM\Entity]
class Alerteias
{
    public function __construct()
    {
        $this->date_detection = new \DateTime();
    }
    #[ORM\Id]
    #[ORM\GeneratedValue(strategy: 'AUTO')]
    #[ORM\Column(type: "integer")]
    private int $id;

    #[ORM\Column(type: "string", length: 100)]
    private string $type_alerte;

    #[ORM\Column(type: "text")]
    private string $message;

    #[ORM\Column(type: "float")]
    private float $score_gravite;

    #[ORM\Column(type: "datetime")]
    private \DateTimeInterface $date_detection;

    #[ORM\ManyToOne(targetEntity: Franchises::class, inversedBy: "alerteiass")]
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

    public function getType_alerte()
    {
        return $this->type_alerte;
    }

    public function setType_alerte($value)
    {
        $this->type_alerte = $value;
    }

    public function getMessage()
    {
        return $this->message;
    }

    public function setMessage($value)
    {
        $this->message = $value;
    }

    public function getScore_gravite(): float
    {
        return $this->score_gravite;
    }

    public function setScore_gravite(float $value)
    {
        $this->score_gravite = $value;
    }

    public function getDate_detection()
    {
        return $this->date_detection;
    }

    public function setDate_detection($value)
    {
        $this->date_detection = $value;
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
