<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FacadeRepository")
 */
class Facade
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
    private $smear;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $peelingOff;

    /**
     * @ORM\Column(type="boolean", nullable=true)
     */
    private $humidification;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $cracksFrom;

    /**
     * @ORM\Column(type="string", length=20, nullable=true)
     */
    private $cracksSize;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSmear(): ?bool
    {
        return $this->smear;
    }

    public function setSmear(?bool $smear): self
    {
        $this->smear = $smear;

        return $this;
    }

    public function getPeelingOff(): ?bool
    {
        return $this->peelingOff;
    }

    public function setPeelingOff(?bool $peelingOff): self
    {
        $this->peelingOff = $peelingOff;

        return $this;
    }

    public function getHumidification(): ?bool
    {
        return $this->humidification;
    }

    public function setHumidification(?bool $humidification): self
    {
        $this->humidification = $humidification;

        return $this;
    }

    public function getCracksFrom(): ?string
    {
        return $this->cracksFrom;
    }

    public function setCracksFrom(?string $cracksFrom): self
    {
        $this->cracksFrom = $cracksFrom;

        return $this;
    }

    public function getCracksSize(): ?string
    {
        return $this->cracksSize;
    }

    public function setCracksSize(?string $cracksSize): self
    {
        $this->cracksSize = $cracksSize;

        return $this;
    }
}