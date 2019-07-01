<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

class MainWorkCategories
{

    private $Couverture;

    private $Isolation;

    private $Interieur;

    private $Ravalement;

    private $Menuiserie;

    private $Terrassement;

    public function getCouverture(): ?bool
    {
        return $this->Couverture;
    }

    public function setCouverture(?bool $Couverture): self
    {
        $this->Couverture = $Couverture;

        return $this;
    }

    public function getIsolation(): ?bool
    {
        return $this->Isolation;
    }

    public function setIsolation(?bool $Isolation): self
    {
        $this->Isolation = $Isolation;

        return $this;
    }

    public function getInterieur(): ?bool
    {
        return $this->Interieur;
    }

    public function setInterieur(?bool $Interieur): self
    {
        $this->Interieur = $Interieur;

        return $this;
    }

    public function getRavalement(): ?bool
    {
        return $this->Ravalement;
    }

    public function setRavalement(?bool $Ravalement): self
    {
        $this->Ravalement = $Ravalement;

        return $this;
    }

    public function getMenuiserie(): ?bool
    {
        return $this->Menuiserie;
    }

    public function setMenuiserie(?bool $Menuiserie): self
    {
        $this->Menuiserie = $Menuiserie;

        return $this;
    }

    public function getTerrassement(): ?bool
    {
        return $this->Terrassement;
    }

    public function setTerrassement(?bool $Terrassement): self
    {
        $this->Terrassement = $Terrassement;

        return $this;
    }
}
