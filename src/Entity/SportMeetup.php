<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\SportMeetupRepository")
 */
class SportMeetup
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $sportType;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $duration;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSportType(): ?string
    {
        return $this->sportType;
    }

    public function setSportType(string $sportType): self
    {
        $this->sportType = $sportType;

        return $this;
    }

    public function getDuration(): ?string
    {
        return $this->duration;
    }

    public function setDuration(string $duration): self
    {
        $this->duration = $duration;

        return $this;
    }
}
