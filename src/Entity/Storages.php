<?php

namespace App\Entity;

use App\Repository\StoragesRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=StoragesRepository::class)
 */
class Storages
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
    private $namestorage;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $descriptionstorage;

    /**
     * @ORM\OneToMany(targetEntity=Equipments::class, mappedBy="equipementsstorages")
     */
    private $storagesequipments;

    public function __construct()
    {
        $this->storagesequipments = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNamestorage(): ?string
    {
        return $this->namestorage;
    }

    public function setNamestorage(string $namestorage): self
    {
        $this->namestorage = $namestorage;

        return $this;
    }

    public function getDescriptionstorage(): ?string
    {
        return $this->descriptionstorage;
    }

    public function setDescriptionstorage(?string $descriptionstorage): self
    {
        $this->descriptionstorage = $descriptionstorage;

        return $this;
    }

    /**
     * @return Collection<int, Equipments>
     */
    public function getStoragesequipments(): Collection
    {
        return $this->storagesequipments;
    }

    public function addStoragesequipment(Equipments $storagesequipment): self
    {
        if (!$this->storagesequipments->contains($storagesequipment)) {
            $this->storagesequipments[] = $storagesequipment;
            $storagesequipment->setEquipementsstorages($this);
        }

        return $this;
    }

    public function removeStoragesequipment(Equipments $storagesequipment): self
    {
        if ($this->storagesequipments->removeElement($storagesequipment)) {
            // set the owning side to null (unless already changed)
            if ($storagesequipment->getEquipementsstorages() === $this) {
                $storagesequipment->setEquipementsstorages(null);
            }
        }

        return $this;
    }
}
