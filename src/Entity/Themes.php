<?php

namespace App\Entity;

use App\Repository\ThemesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
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

    /**
     * @ORM\ManyToMany(targetEntity=ActionsAssos::class, mappedBy="actionsassostheme")
     */
    private $themesactionsasso;

    /**
     * @ORM\ManyToMany(targetEntity=ActionsMasters::class, mappedBy="ActionsThemes")
     */
    private $ThemesActions;

    public function __construct()
    {
        $this->themesactionsasso = new ArrayCollection();
        $this->ThemesActions = new ArrayCollection();
    }

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

    /**
     * @return Collection<int, ActionsAssos>
     */
    public function getThemesactionsasso(): Collection
    {
        return $this->themesactionsasso;
    }

    public function addThemesactionsasso(ActionsAssos $themesactionsasso): self
    {
        if (!$this->themesactionsasso->contains($themesactionsasso)) {
            $this->themesactionsasso[] = $themesactionsasso;
            $themesactionsasso->addActionsassostheme($this);
        }

        return $this;
    }

    public function removeThemesactionsasso(ActionsAssos $themesactionsasso): self
    {
        if ($this->themesactionsasso->removeElement($themesactionsasso)) {
            $themesactionsasso->removeActionsassostheme($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, ActionsMasters>
     */
    public function getThemesActions(): Collection
    {
        return $this->ThemesActions;
    }

    public function addThemesAction(ActionsMasters $themesAction): self
    {
        if (!$this->ThemesActions->contains($themesAction)) {
            $this->ThemesActions[] = $themesAction;
            $themesAction->addActionsTheme($this);
        }

        return $this;
    }

    public function removeThemesAction(ActionsMasters $themesAction): self
    {
        if ($this->ThemesActions->removeElement($themesAction)) {
            $themesAction->removeActionsTheme($this);
        }

        return $this;
    }
}
