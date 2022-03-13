<?php

namespace App\Entity;

use App\Repository\FieldtripsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FieldtripsRepository::class)
 */
class Fieldtrips
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $datefieldtrip;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $titlefieldtrip;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $picturefieldtrip;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $textfieldtrip;

    /**
     * @ORM\OneToMany(targetEntity=Fieldtripphotos::class, mappedBy="fieldstripsorigin")
     */
    private $connectfieldtrip;

    /**
     * @ORM\ManyToOne(targetEntity=Users::class, inversedBy="connectUser")
     */
    private $usersorigin;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $altpicturefieldtrip;

    public function __construct()
    {
        $this->connectfieldtrip = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDatefieldtrip(): ?\DateTimeInterface
    {
        return $this->datefieldtrip;
    }

    public function setDatefieldtrip(?\DateTimeInterface $datefieldtrip): self
    {
        $this->datefieldtrip = $datefieldtrip;

        return $this;
    }

    public function getTitlefieldtrip(): ?string
    {
        return $this->titlefieldtrip;
    }

    public function setTitlefieldtrip(string $titlefieldtrip): self
    {
        $this->titlefieldtrip = $titlefieldtrip;

        return $this;
    }

    public function getPicturefieldtrip(): ?string
    {
        return $this->picturefieldtrip;
    }

    public function setPicturefieldtrip(?string $picturefieldtrip): self
    {
        $this->picturefieldtrip = $picturefieldtrip;

        return $this;
    }

    public function getTextfieldtrip(): ?string
    {
        return $this->textfieldtrip;
    }

    public function setTextfieldtrip(?string $textfieldtrip): self
    {
        $this->textfieldtrip = $textfieldtrip;

        return $this;
    }

    /**
     * @return Collection<int, Fieldtripphotos>
     */
    public function getConnectfieldtrip(): Collection
    {
        return $this->connectfieldtrip;
    }

    public function addConnectfieldtrip(Fieldtripphotos $connectfieldtrip): self
    {
        if (!$this->connectfieldtrip->contains($connectfieldtrip)) {
            $this->connectfieldtrip[] = $connectfieldtrip;
            $connectfieldtrip->setFieldstripsorigin($this);
        }

        return $this;
    }

    public function removeConnectfieldtrip(Fieldtripphotos $connectfieldtrip): self
    {
        if ($this->connectfieldtrip->removeElement($connectfieldtrip)) {
            // set the owning side to null (unless already changed)
            if ($connectfieldtrip->getFieldstripsorigin() === $this) {
                $connectfieldtrip->setFieldstripsorigin(null);
            }
        }

        return $this;
    }

    public function getUsersorigin(): ?Users
    {
        return $this->usersorigin;
    }

    public function setUsersorigin(?Users $usersorigin): self
    {
        $this->usersorigin = $usersorigin;

        return $this;
    }

    public function getAltpicturefieldtrip(): ?string
    {
        return $this->altpicturefieldtrip;
    }

    public function setAltpicturefieldtrip(?string $altpicturefieldtrip): self
    {
        $this->altpicturefieldtrip = $altpicturefieldtrip;

        return $this;
    }
}
