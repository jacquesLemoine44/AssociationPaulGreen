<?php

namespace App\Entity;

use App\Repository\ActionsAssosRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ActionsAssosRepository::class)
 */
class ActionsAssos
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
    private $titleactionsasso;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $pictureactionsasso;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $textactionsasso;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $linkactionsasso;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $startactionsasso;

    /**
     * @ORM\Column(type="datetime", nullable=true)
     */
    private $endactionsasso;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $titlelinkactionsasso;

    /**
     * @ORM\OneToMany(targetEntity=PhotosActionsAssos::class, mappedBy="photoactasso", cascade={"persist"}))
     */
    private $actionsassosphoto;

    /**
     * @ORM\OneToMany(targetEntity=DocActionsAssos::class, mappedBy="docactasso")
     */
    private $actionsassosdoc;

    /**
     * @ORM\OneToMany(targetEntity=LinkActionsAssos::class, mappedBy="linkactasso")
     */
    private $actionsassoslink;

    /**
     * @ORM\ManyToOne(targetEntity=Users::class, inversedBy="usersactionsasso")
     */
    private $actionsassosuser;

    /**
     * @ORM\ManyToMany(targetEntity=Themes::class, inversedBy="themesactionsasso")
     */
    private $actionsassostheme;

    public function __construct()
    {
        $this->actionsassosphoto = new ArrayCollection();
        $this->actionsassosdoc = new ArrayCollection();
        $this->actionsassoslink = new ArrayCollection();
        $this->actionsassostheme = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitleactionsasso(): ?string
    {
        return $this->titleactionsasso;
    }

    public function setTitleactionsasso(string $titleactionsasso): self
    {
        $this->titleactionsasso = $titleactionsasso;

        return $this;
    }

    public function getPictureactionsasso(): ?string
    {
        return $this->pictureactionsasso;
    }

    public function setPictureactionsasso(?string $pictureactionsasso): self
    {
        $this->pictureactionsasso = $pictureactionsasso;

        return $this;
    }

    public function getTextactionsasso(): ?string
    {
        return $this->textactionsasso;
    }

    public function setTextactionsasso(?string $textactionsasso): self
    {
        $this->textactionsasso = $textactionsasso;

        return $this;
    }

    public function getLinkactionsasso(): ?string
    {
        return $this->linkactionsasso;
    }

    public function setLinkactionsasso(?string $linkactionsasso): self
    {
        $this->linkactionsasso = $linkactionsasso;

        return $this;
    }

    public function getStartactionsasso(): ?\DateTimeInterface
    {
        return $this->startactionsasso;
    }

    public function setStartactionsasso(?\DateTimeInterface $startactionsasso): self
    {
        $this->startactionsasso = $startactionsasso;

        return $this;
    }

    public function getEndactionsasso(): ?\DateTimeInterface
    {
        return $this->endactionsasso;
    }

    public function setEndactionsasso(?\DateTimeInterface $endactionsasso): self
    {
        $this->endactionsasso = $endactionsasso;

        return $this;
    }

    public function getTitlelinkactionsasso(): ?string
    {
        return $this->titlelinkactionsasso;
    }

    public function setTitlelinkactionsasso(?string $titlelinkactionsasso): self
    {
        $this->titlelinkactionsasso = $titlelinkactionsasso;

        return $this;
    }

    /**
     * @return Collection<int, PhotosActionsAssos>
     */
    public function getActionsassosphoto(): Collection
    {
        return $this->actionsassosphoto;
    }

    public function addActionsassosphoto(PhotosActionsAssos $actionsassosphoto): self
    {
        if (!$this->actionsassosphoto->contains($actionsassosphoto)) {
            $this->actionsassosphoto[] = $actionsassosphoto;
            $actionsassosphoto->setPhotoactasso($this);
        }

        return $this;
    }

    public function removeActionsassosphoto(PhotosActionsAssos $actionsassosphoto): self
    {
        if ($this->actionsassosphoto->removeElement($actionsassosphoto)) {
            // set the owning side to null (unless already changed)
            if ($actionsassosphoto->getPhotoactasso() === $this) {
                $actionsassosphoto->setPhotoactasso(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, DocActionsAssos>
     */
    public function getActionsassosdoc(): Collection
    {
        return $this->actionsassosdoc;
    }

    public function addActionsassosdoc(DocActionsAssos $actionsassosdoc): self
    {
        if (!$this->actionsassosdoc->contains($actionsassosdoc)) {
            $this->actionsassosdoc[] = $actionsassosdoc;
            $actionsassosdoc->setDocactasso($this);
        }

        return $this;
    }

    public function removeActionsassosdoc(DocActionsAssos $actionsassosdoc): self
    {
        if ($this->actionsassosdoc->removeElement($actionsassosdoc)) {
            // set the owning side to null (unless already changed)
            if ($actionsassosdoc->getDocactasso() === $this) {
                $actionsassosdoc->setDocactasso(null);
            }
        }

        return $this;
    }

    /**
     * @return Collection<int, LinkActionsAssos>
     */
    public function getActionsassoslink(): Collection
    {
        return $this->actionsassoslink;
    }

    public function addActionsassoslink(LinkActionsAssos $actionsassoslink): self
    {
        if (!$this->actionsassoslink->contains($actionsassoslink)) {
            $this->actionsassoslink[] = $actionsassoslink;
            $actionsassoslink->setLinkactasso($this);
        }

        return $this;
    }

    public function removeActionsassoslink(LinkActionsAssos $actionsassoslink): self
    {
        if ($this->actionsassoslink->removeElement($actionsassoslink)) {
            // set the owning side to null (unless already changed)
            if ($actionsassoslink->getLinkactasso() === $this) {
                $actionsassoslink->setLinkactasso(null);
            }
        }

        return $this;
    }

    public function getActionsassosuser(): ?Users
    {
        return $this->actionsassosuser;
    }

    public function setActionsassosuser(?Users $actionsassosuser): self
    {
        $this->actionsassosuser = $actionsassosuser;

        return $this;
    }

    /**
     * @return Collection<int, Themes>
     */
    public function getActionsassostheme(): Collection
    {
        return $this->actionsassostheme;
    }

    public function addActionsassostheme(Themes $actionsassostheme): self
    {
        if (!$this->actionsassostheme->contains($actionsassostheme)) {
            $this->actionsassostheme[] = $actionsassostheme;
        }

        return $this;
    }

    public function removeActionsassostheme(Themes $actionsassostheme): self
    {
        $this->actionsassostheme->removeElement($actionsassostheme);

        return $this;
    }
}
