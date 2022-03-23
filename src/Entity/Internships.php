<?php

namespace App\Entity;

use App\Repository\InternshipsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=InternshipsRepository::class)
 */
class Internships
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titleinternship;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $offerinternship;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $placeintership;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $startinternship;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $endinternship;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $linkinternship;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $shorttextinternship;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitleinternship(): ?string
    {
        return $this->titleinternship;
    }

    public function setTitleinternship(string $titleinternship): self
    {
        $this->titleinternship = $titleinternship;

        return $this;
    }

    public function getOfferinternship(): ?string
    {
        return $this->offerinternship;
    }

    public function setOfferinternship(?string $offerinternship): self
    {
        $this->offerinternship = $offerinternship;

        return $this;
    }

    public function getPlaceintership(): ?string
    {
        return $this->placeintership;
    }

    public function setPlaceintership(?string $placeintership): self
    {
        $this->placeintership = $placeintership;

        return $this;
    }

    public function getStartinternship(): ?\DateTimeInterface
    {
        return $this->startinternship;
    }

    public function setStartinternship(?\DateTimeInterface $startinternship): self
    {
        $this->startinternship = $startinternship;

        return $this;
    }

    public function getEndinternship(): ?\DateTimeInterface
    {
        return $this->endinternship;
    }

    public function setEndinternship(?\DateTimeInterface $endinternship): self
    {
        $this->endinternship = $endinternship;

        return $this;
    }

    public function getLinkinternship(): ?string
    {
        return $this->linkinternship;
    }

    public function setLinkinternship(?string $linkinternship): self
    {
        $this->linkinternship = $linkinternship;

        return $this;
    }

    public function getShorttextinternship(): ?string
    {
        return $this->shorttextinternship;
    }

    public function setShorttextinternship(?string $shorttextinternship): self
    {
        $this->shorttextinternship = $shorttextinternship;

        return $this;
    }
}
