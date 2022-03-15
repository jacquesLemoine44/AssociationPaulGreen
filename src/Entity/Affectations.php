<?php

namespace App\Entity;

use App\Repository\AffectationsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=AffectationsRepository::class)
 */
class Affectations
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=100)
     */
    private $nameaffectation;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $descriptionaffectation;

    /**
     * @ORM\OneToMany(targetEntity=Equipments::class, mappedBy="equipmentsaffectations")
     */
    private $affectationsequipments;

    public function __construct()
    {
        $this->affectationsequipments = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameaffectation(): ?string
    {
        return $this->nameaffectation;
    }

    public function setNameaffectation(string $nameaffectation): self
    {
        $this->nameaffectation = $nameaffectation;

        return $this;
    }

    public function getDescriptionaffectation(): ?string
    {
        return $this->descriptionaffectation;
    }

    public function setDescriptionaffectation(?string $descriptionaffectation): self
    {
        $this->descriptionaffectation = $descriptionaffectation;

        return $this;
    }

    /**
     * @return Collection<int, Equipments>
     */
    public function getAffectationsequipments(): Collection
    {
        return $this->affectationsequipments;
    }

    public function addAffectationsequipment(Equipments $affectationsequipment): self
    {
        if (!$this->affectationsequipments->contains($affectationsequipment)) {
            $this->affectationsequipments[] = $affectationsequipment;
            $affectationsequipment->setEquipmentsaffectations($this);
        }

        return $this;
    }

    public function removeAffectationsequipment(Equipments $affectationsequipment): self
    {
        if ($this->affectationsequipments->removeElement($affectationsequipment)) {
            // set the owning side to null (unless already changed)
            if ($affectationsequipment->getEquipmentsaffectations() === $this) {
                $affectationsequipment->setEquipmentsaffectations(null);
            }
        }

        return $this;
    }
}
