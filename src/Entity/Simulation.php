<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: \App\Repository\SimulationRepository::class)]
class Simulation
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private ?int $id = null;

    #[ORM\Column(type: 'string', length: 255)]
    private ?string $nomSimulation = null;

    #[ORM\Column(type: 'float')]
    private ?float $capital = null;

    #[ORM\Column(type: 'float')]
    private ?float $tauxAnnuel = null;

    #[ORM\Column(type: 'integer')]
    private ?int $dureeMois = null;

    #[ORM\Column(type: 'float', nullable: true)]
    private ?float $revenuMensuel = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNomSimulation(): ?string
    {
        return $this->nomSimulation;
    }

    public function setNomSimulation(string $nomSimulation): self
    {
        $this->nomSimulation = $nomSimulation;

        return $this;
    }

    public function getCapital(): ?float
    {
        return $this->capital;
    }

    public function setCapital(float $capital): self
    {
        $this->capital = $capital;

        return $this;
    }

    public function getTauxAnnuel(): ?float
    {
        return $this->tauxAnnuel;
    }

    public function setTauxAnnuel(float $tauxAnnuel): self
    {
        $this->tauxAnnuel = $tauxAnnuel;

        return $this;
    }

    public function getDureeMois(): ?int
    {
        return $this->dureeMois;
    }

    public function setDureeMois(int $dureeMois): self
    {
        $this->dureeMois = $dureeMois;

        return $this;
    }

    public function getRevenuMensuel(): ?float
    {
        return $this->revenuMensuel;
    }

    public function setRevenuMensuel(?float $revenuMensuel): self
    {
        $this->revenuMensuel = $revenuMensuel;

        return $this;
    }
}
