<?php

namespace App\Entity;

use App\Repository\ParamsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ParamsRepository::class)
 */
class Params
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="text")
     */
    private $textParam;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $logoParam;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $photoParam;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $emailParam;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titleParam;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $address1Param;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $address2Param;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $cpParam;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $townParam;

    /**
     * @ORM\Column(type="datetime")
     */
    private $updateParam;

    /**
     * @ORM\OneToMany(targetEntity=SocialNetworks::class, mappedBy="params")
     */
    private $paramsocial;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $subtitleparam;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $politiqueparams;

    public function __construct()
    {
        $this->paramsocial = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTextParam(): ?string
    {
        return $this->textParam;
    }

    public function setTextParam(string $textParam): self
    {
        $this->textParam = $textParam;

        return $this;
    }

    public function getLogoParam(): ?string
    {
        return $this->logoParam;
    }

    public function setLogoParam(string $logoParam): self
    {
        $this->logoParam = $logoParam;

        return $this;
    }

    public function getPhotoParam(): ?string
    {
        return $this->photoParam;
    }

    public function setPhotoParam(string $photoParam): self
    {
        $this->photoParam = $photoParam;

        return $this;
    }

    public function getEmailParam(): ?string
    {
        return $this->emailParam;
    }

    public function setEmailParam(string $emailParam): self
    {
        $this->emailParam = $emailParam;

        return $this;
    }

    public function getTitleParam(): ?string
    {
        return $this->titleParam;
    }

    public function setTitleParam(string $titleParam): self
    {
        $this->titleParam = $titleParam;

        return $this;
    }

    public function getAddress1Param(): ?string
    {
        return $this->address1Param;
    }

    public function setAddress1Param(string $address1Param): self
    {
        $this->address1Param = $address1Param;

        return $this;
    }

    public function getAddress2Param(): ?string
    {
        return $this->address2Param;
    }

    public function setAddress2Param(?string $address2Param): self
    {
        $this->address2Param = $address2Param;

        return $this;
    }

    public function getCpParam(): ?string
    {
        return $this->cpParam;
    }

    public function setCpParam(string $cpParam): self
    {
        $this->cpParam = $cpParam;

        return $this;
    }

    public function getTownParam(): ?string
    {
        return $this->townParam;
    }

    public function setTownParam(string $townParam): self
    {
        $this->townParam = $townParam;

        return $this;
    }

    public function getUpdateParam(): ?\DateTimeInterface
    {
        return $this->updateParam;
    }

    public function setUpdateParam(\DateTimeInterface $updateParam): self
    {
        $this->updateParam = $updateParam;

        return $this;
    }

    /**
     * @return Collection<int, SocialNetworks>
     */
    public function getParamsocial(): Collection
    {
        return $this->paramsocial;
    }

    public function addParamsocial(SocialNetworks $paramsocial): self
    {
        if (!$this->paramsocial->contains($paramsocial)) {
            $this->paramsocial[] = $paramsocial;
            $paramsocial->setParams($this);
        }

        return $this;
    }

    public function removeParamsocial(SocialNetworks $paramsocial): self
    {
        if ($this->paramsocial->removeElement($paramsocial)) {
            // set the owning side to null (unless already changed)
            if ($paramsocial->getParams() === $this) {
                $paramsocial->setParams(null);
            }
        }

        return $this;
    }

    public function getSubtitleparam(): ?string
    {
        return $this->subtitleparam;
    }

    public function setSubtitleparam(?string $subtitleparam): self
    {
        $this->subtitleparam = $subtitleparam;

        return $this;
    }

    public function getPolitiqueparams(): ?string
    {
        return $this->politiqueparams;
    }

    public function setPolitiqueparams(?string $politiqueparams): self
    {
        $this->politiqueparams = $politiqueparams;

        return $this;
    }
}
