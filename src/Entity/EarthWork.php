<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EarthWorkRepository")
 */
class EarthWork
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $disabledConcrete;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $concreteSlab;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $floorTiles;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDisabledConcrete(): ?bool
    {
        return $this->disabledConcrete;
    }

    public function setDisabledConcrete(?bool $disabledConcrete): self
    {
        $this->disabledConcrete = $disabledConcrete;

        return $this;
    }

    public function getConcreteSlab(): ?bool
    {
        return $this->concreteSlab;
    }

    public function setConcreteSlab(?bool $concreteSlab): self
    {
        $this->concreteSlab = $concreteSlab;

        return $this;
    }

    public function getFloorTiles(): ?bool
    {
        return $this->floorTiles;
    }

    public function setFloorTiles(?bool $floorTiles): self
    {
        $this->floorTiles = $floorTiles;

        return $this;
    }
}
