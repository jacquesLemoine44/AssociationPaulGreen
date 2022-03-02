<?php

namespace App\Entity;

use App\Repository\PhotosActionsAssosRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PhotosActionsAssosRepository::class)
 */
class PhotosActionsAssos
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
    private $photoactionsasso;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $altphotoactionsasso;

    /**
     * @ORM\ManyToOne(targetEntity=ActionsAssos::class, inversedBy="actionsassosphoto")
     */
    private $photoactasso;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPhotoactionsasso(): ?string
    {
        return $this->photoactionsasso;
    }

    public function setPhotoactionsasso(string $photoactionsasso): self
    {
        $this->photoactionsasso = $photoactionsasso;

        return $this;
    }

    public function getAltphotoactionsasso(): ?string
    {
        return $this->altphotoactionsasso;
    }

    public function setAltphotoactionsasso(?string $altphotoactionsasso): self
    {
        $this->altphotoactionsasso = $altphotoactionsasso;

        return $this;
    }

    public function getPhotoactasso(): ?ActionsAssos
    {
        return $this->photoactasso;
    }

    public function setPhotoactasso(?ActionsAssos $photoactasso): self
    {
        $this->photoactasso = $photoactasso;

        return $this;
    }
}
