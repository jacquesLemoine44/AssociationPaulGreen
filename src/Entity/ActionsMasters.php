<?php

namespace App\Entity;

use App\Repository\ActionsMastersRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ActionsMastersRepository::class)
 */
class ActionsMasters
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
    private $titleactionsmaster;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $pictureactionsmaster;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $altpictureactionsmaster;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $textactionsmaster;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $titlelinkactionsmaster;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $startactionsmaster;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $endactionsmaster;

    /**
     * @ORM\OneToMany(targetEntity=LinkActionsMasters::class, mappedBy="LinksActions")
     */
    private $ActionsLinks;

    /**
     * @ORM\OneToMany(targetEntity=DocActionsMasters::class, mappedBy="DocActions")
     */
    private $ActionsDocs;

    /**
     * @ORM\OneToMany(targetEntity=PhotosActionsMasters::class, mappedBy="PhotosActions", cascade={"persist"}, orphanRemoval=true))
     */
    private $PhotosActions;

    /**
     * @ORM\ManyToMany(targetEntity=Themes::class, inversedBy="ThemesActions")
     */
    private $ActionsThemes;

    /**
     * @ORM\ManyToOne(targetEntity=Users::class, inversedBy="UsersMasters")
     */
    private $ActionsUsers;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $linkactionsmaster;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $shorttextactionsmaster;

    public function __construct()
    {
        $this->ActionsLinks = new ArrayCollection();
        $this->ActionsDocs = new ArrayCollection();
        $this->PhotosActions = new ArrayCollection();
        $this->ActionsThemes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitleactionsmaster(): ?string
    {
        return $this->titleactionsmaster;
    }

    public function setTitleactionsmaster(string $titleactionsmaster): self
    {
        $this->titleactionsmaster = $titleactionsmaster;

        return $this;
    }

    public function getPictureactionsmaster(): ?string
    {
        return $this->pictureactionsmaster;
    }

    public function setPictureactionsmaster(?string $pictureactionsmaster): self
    {
        $this->pictureactionsmaster = $pictureactionsmaster;

        return $this;
    }

    public function getAltpictureactionsmaster(): ?string
    {
        return $this->altpictureactionsmaster;
    }

    public function setAltpictureactionsmaster(?string $altpictureactionsmaster): self
    {
        $this->altpictureactionsmaster = $altpictureactionsmaster;

        return $this;
    }

    public function getTextactionsmaster(): ?string
    {
        return $this->textactionsmaster;
    }

    public function setTextactionsmaster(?string $textactionsmaster): self
    {
        $this->textactionsmaster = $textactionsmaster;

        return $this;
    }

    public function getTitlelinkactionsmaster(): ?string
    {
        return $this->titlelinkactionsmaster;
    }

    public function setTitlelinkactionsmaster(?string $titlelinkactionsmaster): self
    {
        $this->titlelinkactionsmaster = $titlelinkactionsmaster;

        return $this;
    }

    public function getStartactionsmaster(): ?\DateTimeInterface
    {
        return $this->startactionsmaster;
    }

    public function setStartactionsmaster(?\DateTimeInterface $startactionsmaster): self
    {
        $this->startactionsmaster = $startactionsmaster;

        return $this;
    }

    public function getEndactionsmaster(): ?\DateTimeInterface
    {
        return $this->endactionsmaster;
    }

    public function setEndactionsmaster(?\DateTimeInterface $endactionsmaster): self
    {
        $this->endactionsmaster = $endactionsmaster;

        return $this;
    }

    /**
     * @return Collection<int, LinkActionsMasters>
     */
    public function getActionsLinks(): Collection
    {
        return $this->ActionsLinks;
    }

    public function addActionsLink(LinkActionsMasters $actionsLink): self
    {
        if (!$this->ActionsLinks->contains($actionsLink)) {
            $this->ActionsLinks[] = $actionsLink;
            $actionsLink->setLinksActions($this);
        }

        return $this;
    }

    public function removeActionsLink(LinkActionsMasters $actionsLink): self
    {
        if ($this->ActionsLinks->removeElement($actionsLink)) {
            // set the owning side to null (unless already changed)
            if ($actionsLink->getLinksActions() === $this) {
                $actionsLink->setLinksActions(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, DocActionsMasters>
     */
    public function getActionsDocs(): Collection
    {
        return $this->ActionsDocs;
    }

    public function addActionsDoc(DocActionsMasters $actionsDoc): self
    {
        if (!$this->ActionsDocs->contains($actionsDoc)) {
            $this->ActionsDocs[] = $actionsDoc;
            $actionsDoc->setDocActions($this);
        }

        return $this;
    }

    public function removeActionsDoc(DocActionsMasters $actionsDoc): self
    {
        if ($this->ActionsDocs->removeElement($actionsDoc)) {
            // set the owning side to null (unless already changed)
            if ($actionsDoc->getDocActions() === $this) {
                $actionsDoc->setDocActions(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, PhotosActionsMasters>
     */
    public function getPhotosActions(): Collection
    {
        return $this->PhotosActions;
    }

    public function addPhotosAction(PhotosActionsMasters $photosAction): self
    {
        if (!$this->PhotosActions->contains($photosAction)) {
            $this->PhotosActions[] = $photosAction;
            $photosAction->setPhotosActions($this);
        }

        return $this;
    }

    public function removePhotosAction(PhotosActionsMasters $photosAction): self
    {
        if ($this->PhotosActions->removeElement($photosAction)) {
            // set the owning side to null (unless already changed)
            if ($photosAction->getPhotosActions() === $this) {
                $photosAction->setPhotosActions(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, Themes>
     */
    public function getActionsThemes(): Collection
    {
        return $this->ActionsThemes;
    }

    public function addActionsTheme(Themes $actionsTheme): self
    {
        if (!$this->ActionsThemes->contains($actionsTheme)) {
            $this->ActionsThemes[] = $actionsTheme;
        }

        return $this;
    }

    public function removeActionsTheme(Themes $actionsTheme): self
    {
        $this->ActionsThemes->removeElement($actionsTheme);

        return $this;
    }

    public function getActionsUsers(): ?Users
    {
        return $this->ActionsUsers;
    }

    public function setActionsUsers(?Users $ActionsUsers): self
    {
        $this->ActionsUsers = $ActionsUsers;

        return $this;
    }

    public function getLinkactionsmaster(): ?string
    {
        return $this->linkactionsmaster;
    }

    public function setLinkactionsmaster(?string $linkactionsmaster): self
    {
        $this->linkactionsmaster = $linkactionsmaster;

        return $this;
    }

    public function getShorttextactionsmaster(): ?string
    {
        return $this->shorttextactionsmaster;
    }

    public function setShorttextactionsmaster(?string $shorttextactionsmaster): self
    {
        $this->shorttextactionsmaster = $shorttextactionsmaster;

        return $this;
    }
}
