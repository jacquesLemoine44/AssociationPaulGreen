<?php

namespace App\Entity;

use App\Repository\EquipmentsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=EquipmentsRepository::class)
 */
class Equipments
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
    private $nameequipement;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $quantityequipment;

    /**
     * @ORM\Column(type="float", nullable=true)
     */
    private $quantityminiequipment;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $daterebusequipment;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $loanequipment;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $borrowerequipment;

    /**
     * @ORM\ManyToOne(targetEntity=Storages::class, inversedBy="storagesequipments")
     */
    private $equipementsstorages;

    /**
     * @ORM\ManyToOne(targetEntity=Affectations::class, inversedBy="affectationsequipments")
     */
    private $equipmentsaffectations;

    /**
     * @ORM\ManyToOne(targetEntity=Users::class, inversedBy="usersequipments")
     */
    private $equipmentsusers;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameequipement(): ?string
    {
        return $this->nameequipement;
    }

    public function setNameequipement(string $nameequipement): self
    {
        $this->nameequipement = $nameequipement;

        return $this;
    }

    public function getQuantityequipment(): ?float
    {
        return $this->quantityequipment;
    }

    public function setQuantityequipment(?float $quantityequipment): self
    {
        $this->quantityequipment = $quantityequipment;

        return $this;
    }

    public function getQuantityminiequipment(): ?float
    {
        return $this->quantityminiequipment;
    }

    public function setQuantityminiequipment(?float $quantityminiequipment): self
    {
        $this->quantityminiequipment = $quantityminiequipment;

        return $this;
    }

    public function getDaterebusequipment(): ?\DateTimeInterface
    {
        return $this->daterebusequipment;
    }

    public function setDaterebusequipment(?\DateTimeInterface $daterebusequipment): self
    {
        $this->daterebusequipment = $daterebusequipment;

        return $this;
    }

    public function getLoanequipment(): ?\DateTimeInterface
    {
        return $this->loanequipment;
    }

    public function setLoanequipment(?\DateTimeInterface $loanequipment): self
    {
        $this->loanequipment = $loanequipment;

        return $this;
    }

    public function getBorrowerequipment(): ?string
    {
        return $this->borrowerequipment;
    }

    public function setBorrowerequipment(?string $borrowerequipment): self
    {
        $this->borrowerequipment = $borrowerequipment;

        return $this;
    }

    public function getEquipementsstorages(): ?Storages
    {
        return $this->equipementsstorages;
    }

    public function setEquipementsstorages(?Storages $equipementsstorages): self
    {
        $this->equipementsstorages = $equipementsstorages;

        return $this;
    }

    public function getEquipmentsaffectations(): ?Affectations
    {
        return $this->equipmentsaffectations;
    }

    public function setEquipmentsaffectations(?Affectations $equipmentsaffectations): self
    {
        $this->equipmentsaffectations = $equipmentsaffectations;

        return $this;
    }

    public function getEquipmentsusers(): ?Users
    {
        return $this->equipmentsusers;
    }

    public function setEquipmentsusers(?Users $equipmentsusers): self
    {
        $this->equipmentsusers = $equipmentsusers;

        return $this;
    }
}
