<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FormCouvertureRepository")
 */
class FormCouverture
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
    private $TuileCassee;

    /**
     * @ORM\Column(type="boolean")
     */
    private $FuiteDeau;

    /**
     * @ORM\Column(type="boolean")
     */
    private $MousseLichenEct;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $DernierTraitement;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTuileCassee(): ?bool
    {
        return $this->TuileCassee;
    }

    public function setTuileCassee(bool $TuileCassee): self
    {
        $this->TuileCassee = $TuileCassee;

        return $this;
    }

    public function getFuiteDeau(): ?bool
    {
        return $this->FuiteDeau;
    }

    public function setFuiteDeau(bool $FuiteDeau): self
    {
        $this->FuiteDeau = $FuiteDeau;

        return $this;
    }

    public function getMousseLichenEct(): ?bool
    {
        return $this->MousseLichenEct;
    }

    public function setMousseLichenEct(bool $MousseLichenEct): self
    {
        $this->MousseLichenEct = $MousseLichenEct;

        return $this;
    }

    public function getDernierTraitement(): ?string
    {
        return $this->DernierTraitement;
    }

    public function setDernierTraitement(string $DernierTraitement): self
    {
        $this->DernierTraitement = $DernierTraitement;

        return $this;
    }
}
