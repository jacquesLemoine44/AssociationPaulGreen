<?php

namespace App\Entity;

use App\Repository\ThemesRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ThemesRepository::class)
 */
class Themes
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
    private $nameTheme;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $descriptionTheme;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameTheme(): ?string
    {
        return $this->nameTheme;
    }

    public function setNameTheme(string $nameTheme): self
    {
        $this->nameTheme = $nameTheme;

        return $this;
    }

    public function getDescriptionTheme(): ?string
    {
        return $this->descriptionTheme;
    }

    public function setDescriptionTheme(?string $descriptionTheme): self
    {
        $this->descriptionTheme = $descriptionTheme;

        return $this;
    }
}
