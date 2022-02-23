<?php

namespace App\Entity;

use App\Repository\PartnersRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=PartnersRepository::class)
 */
class Partners
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
    private $namePartner;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $textPartner;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $photoPartner;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $logoPartner;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $linkPartner;

    /**
     * @ORM\ManyToOne(targetEntity=GroupingPartners::class, inversedBy="partners")
     */
    private $partnerGrouping;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNamePartner(): ?string
    {
        return $this->namePartner;
    }

    public function setNamePartner(string $namePartner): self
    {
        $this->namePartner = $namePartner;

        return $this;
    }

    public function getTextPartner(): ?string
    {
        return $this->textPartner;
    }

    public function setTextPartner(?string $textPartner): self
    {
        $this->textPartner = $textPartner;

        return $this;
    }

    public function getPhotoPartner(): ?string
    {
        return $this->photoPartner;
    }

    public function setPhotoPartner(?string $photoPartner): self
    {
        $this->photoPartner = $photoPartner;

        return $this;
    }

    public function getLogoPartner(): ?string
    {
        return $this->logoPartner;
    }

    public function setLogoPartner(?string $logoPartner): self
    {
        $this->logoPartner = $logoPartner;

        return $this;
    }

    public function getLinkPartner(): ?string
    {
        return $this->linkPartner;
    }

    public function setLinkPartner(?string $linkPartner): self
    {
        $this->linkPartner = $linkPartner;

        return $this;
    }

    public function getPartnerGrouping(): ?GroupingPartners
    {
        return $this->partnerGrouping;
    }

    public function setPartnerGrouping(?GroupingPartners $partnerGrouping): self
    {
        $this->partnerGrouping = $partnerGrouping;

        return $this;
    }
}
