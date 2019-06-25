<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\RoofingRepository")
 */
class Roofing
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="boolean")
     */
    private $roofTiles;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $waterLeak;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $mosse;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $lastTreatment;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRoofTiles(): ?bool
    {
        return $this->roofTiles;
    }

    public function setRoofTiles(bool $roofTiles): self
    {
        $this->roofTiles = $roofTiles;

        return $this;
    }

    public function getWaterLeak(): ?bool
    {
        return $this->waterLeak;
    }

    public function setWaterLeak(?bool $waterLeak): self
    {
        $this->waterLeak = $waterLeak;

        return $this;
    }

    public function getMosse(): ?bool
    {
        return $this->mosse;
    }

    public function setMosse(?bool $mosse): self
    {
        $this->mosse = $mosse;

        return $this;
    }

    public function getLastTreatment(): ?string
    {
        return $this->lastTreatment;
    }

    public function setLastTreatment(?string $lastTreatment): self
    {
        $this->lastTreatment = $lastTreatment;

        return $this;
    }
}
