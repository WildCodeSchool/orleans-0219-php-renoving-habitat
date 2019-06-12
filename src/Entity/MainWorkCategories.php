<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MainWorkCategoriesRepository")
 */
class MainWorkCategories
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
    private $Couverture;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $Isolation;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $Interieur;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $Ravalement;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $Menuiserie;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $Terrassement;

    public function getId(): ?int
    {
        return $this->id;
    }

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
