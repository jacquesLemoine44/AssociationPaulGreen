<?php

namespace App\Entity;

use App\Repository\NewsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=NewsRepository::class)
 */
class News
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateNew;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titleNew;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $pictureNew;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $textNew;

    /**
     * @ORM\OneToMany(targetEntity=NewsPhotos::class, mappedBy="newsPhotosnews", cascade={"persist"}, orphanRemoval="true")
     */
    private $newsPhotosNews;

    /**
     * @ORM\ManyToOne(targetEntity=Users::class, inversedBy="usersnew")
     */
    private $newsuser;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $altpicturenew;

    // * @ORM\Column(type="string", length=255, nullable=true)

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $shorttextnew;

    
    public function __construct()
    {
        $this->newsPhotosNews = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDateNew(): ?\DateTimeInterface
    {
        return $this->dateNew;
    }

    public function setDateNew(\DateTimeInterface $dateNew): self
    {
        $this->dateNew = $dateNew;

        return $this;
    }

    public function getTitleNew(): ?string
    {
        return $this->titleNew;
    }

    public function setTitleNew(string $titleNew): self
    {
        $this->titleNew = $titleNew;

        return $this;
    }

    public function getPictureNew(): ?string
    {
        return $this->pictureNew;
    }

    public function setPictureNew(?string $pictureNew): self
    {
        $this->pictureNew = $pictureNew;

        return $this;
    }

    public function getTextNew(): ?string
    {
        return $this->textNew;
    }

    public function setTextNew(?string $textNew): self
    {
        $this->textNew = $textNew;

        return $this;
    }

    /**
     * @return Collection<int, NewsPhotos>
     */
    public function getNewsPhotosNews(): Collection
    {
        return $this->newsPhotosNews;
    }

    public function addNewsPhotosNews(NewsPhotos $newsPhotosNews): self
    {
        if (!$this->newsPhotosNews->contains($newsPhotosNews)) {
            $this->newsPhotosNews[] = $newsPhotosNews;
            $newsPhotosNews->setNewsPhotosnews($this);
        }

        return $this;
    }

    public function removeNewsPhotosNews(NewsPhotos $newsPhotosNews): self
    {
        if ($this->newsPhotosNews->removeElement($newsPhotosNews)) {
            // set the owning side to null (unless already changed)
            if ($newsPhotosNews->getNewsPhotosnews() === $this) {
                $newsPhotosNews->setNewsPhotosnews(null);
            }
        }

        return $this;
    }

    public function getNewsuser(): ?Users
    {
        return $this->newsuser;
    }

    public function setNewsuser(?Users $newsuser): self
    {
        $this->newsuser = $newsuser;

        return $this;
    }

    public function getAltpicturenew(): ?string
    {
        return $this->altpicturenew;
    }

    public function setAltpicturenew(?string $altpicturenew): self
    {
        $this->altpicturenew = $altpicturenew;

        return $this;
    }

    public function getShorttextnew(): ?string
    {
        return $this->shorttextnew;
    }

    public function setShorttextnew(?string $shorttextnew): self
    {
        $this->shorttextnew = $shorttextnew;

        return $this;
    }


}
