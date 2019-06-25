<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\HouseWorkRepository")
 */
class HouseWork
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
    private $renovation;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $blackSpots;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $paperPeelingOff;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRenovation(): ?bool
    {
        return $this->renovation;
    }

    public function setRenovation(?bool $renovation): self
    {
        $this->renovation = $renovation;

        return $this;
    }

    public function getBlackSpots(): ?bool
    {
        return $this->blackSpots;
    }

    public function setBlackSpots(?bool $blackSpots): self
    {
        $this->blackSpots = $blackSpots;

        return $this;
    }

    public function getPaperPeelingOff(): ?bool
    {
        return $this->paperPeelingOff;
    }

    public function setPaperPeelingOff(?bool $paperPeelingOff): self
    {
        $this->paperPeelingOff = $paperPeelingOff;

        return $this;
    }
}
