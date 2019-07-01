<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

class HouseWork
{

    private $id;

    private $renovation;

    private $blackSpots;

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
