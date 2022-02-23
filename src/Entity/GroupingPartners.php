<?php

namespace App\Entity;

use App\Repository\GroupingPartnersRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=GroupingPartnersRepository::class)
 */
class GroupingPartners
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
    private $titleGroupingPartner;

    /**
     * @ORM\OneToMany(targetEntity=Partners::class, mappedBy="partnerGrouping")
     */
    private $partners;

    public function __construct()
    {
        $this->partners = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitleGroupingPartner(): ?string
    {
        return $this->titleGroupingPartner;
    }

    public function setTitleGroupingPartner(string $titleGroupingPartner): self
    {
        $this->titleGroupingPartner = $titleGroupingPartner;

        return $this;
    }

    /**
     * @return Collection<int, Partners>
     */
    public function getPartners(): Collection
    {
        return $this->partners;
    }

    public function addPartner(Partners $partner): self
    {
        if (!$this->partners->contains($partner)) {
            $this->partners[] = $partner;
            $partner->setPartnerGrouping($this);
        }

        return $this;
    }

    public function removePartner(Partners $partner): self
    {
        if ($this->partners->removeElement($partner)) {
            // set the owning side to null (unless already changed)
            if ($partner->getPartnerGrouping() === $this) {
                $partner->setPartnerGrouping(null);
            }
        }

        return $this;
    }
}
