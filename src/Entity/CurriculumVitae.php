<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
use App\Repository\CurriculumVitaeRepository;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CurriculumVitaeRepository")
 * @Vich\Uploadable
 */
class CurriculumVitae
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;


    /**
     * @ORM\Column(type="string", length=255)
     *
     *@var string
     */
    private $cvName;

    /**
     * @ORM\Column(type="integer", nullable=true)
     *
     * @Vich\UploadableField(mapping="cvs", fileNameProperty="cvName", size="cvSize")
     *
     * @var File
     */
    private $cvFile;

    /**
     * @ORM\Column(type="datetime")
     *
     * @var \DateTime
     */
    private $createdAt;

    /**
     * @ORM\Column(type="integer", nullable=true)
     *
     * @var integer
     */

    private $cvSize;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCvName(): ?string
    {
        return $this->cvName;
    }

    public function setCvName(string $cvName): self
    {
        $this->cvName = $cvName;

        return $this;
    }

    public function getCvFile(): ?File
    {
        return $this->cvFile;
    }

    public function setCvFile(?File $cvFile = null)
    {
        $this->cvFile = $cvFile;

        return $this;
    }

    public function getCreatedAt(): ?\DateTimeInterface
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTimeInterface $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getCvSize(): ?int
    {
        return $this->cvSize;
    }

    public function setCvSize(?int $cvSize): self
    {
        $this->cvSize = $cvSize;

        return $this;
    }
}
