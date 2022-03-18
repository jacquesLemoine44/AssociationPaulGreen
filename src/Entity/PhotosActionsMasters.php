<?php

namespace App\Entity;

use App\Repository\PhotosActionsMastersRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PhotosActionsMastersRepository::class)
 */
class PhotosActionsMasters
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
    private $photoactionsmaster;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $altphotoactionsmaster;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPhotoactionsmaster(): ?string
    {
        return $this->photoactionsmaster;
    }

    public function setPhotoactionsmaster(string $photoactionsmaster): self
    {
        $this->photoactionsmaster = $photoactionsmaster;

        return $this;
    }

    public function getAltphotoactionsmaster(): ?string
    {
        return $this->altphotoactionsmaster;
    }

    public function setAltphotoactionsmaster(string $altphotoactionsmaster): self
    {
        $this->altphotoactionsmaster = $altphotoactionsmaster;

        return $this;
    }
}
