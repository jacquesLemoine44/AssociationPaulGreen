<?php

namespace App\Entity;

use App\Repository\NewsPhotosRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=NewsPhotosRepository::class)
 */
class NewsPhotos
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
    private $photoNewPhoto;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $altNewsPhoto;

    /**
     * @ORM\ManyToOne(targetEntity=News::class, inversedBy="newsPhotosNews")
     */
    private $newsPhotosnews;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPhotoNewPhoto(): ?string
    {
        return $this->photoNewPhoto;
    }

    public function setPhotoNewPhoto(string $photoNewPhoto): self
    {
        $this->photoNewPhoto = $photoNewPhoto;

        return $this;
    }

    public function getAltNewsPhoto(): ?string
    {
        return $this->altNewsPhoto;
    }

    public function setAltNewsPhoto(?string $altNewsPhoto): self
    {
        $this->altNewsPhoto = $altNewsPhoto;

        return $this;
    }

    public function getNewsPhotosnews(): ?News
    {
        return $this->newsPhotosnews;
    }

    public function setNewsPhotosnews(?News $newsPhotosnews): self
    {
        $this->newsPhotosnews = $newsPhotosnews;

        return $this;
    }
}
