<?php

namespace App\Entity;

use App\Repository\ContactsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ContactsRepository::class)
 */
class Contacts
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
    private $subjetContact;

    /**
     * @ORM\Column(type="text")
     */
    private $contentContact;

    /**
     * @ORM\Column(type="datetime")
     */
    private $dateContact;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nameContact;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $emailContact;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSubjetContact(): ?string
    {
        return $this->subjetContact;
    }

    public function setSubjetContact(string $subjetContact): self
    {
        $this->subjetContact = $subjetContact;

        return $this;
    }

    public function getContentContact(): ?string
    {
        return $this->contentContact;
    }

    public function setContentContact(string $contentContact): self
    {
        $this->contentContact = $contentContact;

        return $this;
    }

    public function getDateContact(): ?\DateTimeInterface
    {
        return $this->dateContact;
    }

    public function setDateContact(\DateTimeInterface $dateContact): self
    {
        $this->dateContact = $dateContact;

        return $this;
    }

    public function getNameContact(): ?string
    {
        return $this->nameContact;
    }

    public function setNameContact(string $nameContact): self
    {
        $this->nameContact = $nameContact;

        return $this;
    }

    public function getEmailContact(): ?string
    {
        return $this->emailContact;
    }

    public function setEmailContact(string $emailContact): self
    {
        $this->emailContact = $emailContact;

        return $this;
    }
}
