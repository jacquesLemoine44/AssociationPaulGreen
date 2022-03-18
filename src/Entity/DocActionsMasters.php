<?php

namespace App\Entity;

use App\Repository\DocActionsMastersRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DocActionsMastersRepository::class)
 */
class DocActionsMasters
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
    private $titledocactionsmaster;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $linkdocactionsmaster;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitledocactionsmaster(): ?string
    {
        return $this->titledocactionsmaster;
    }

    public function setTitledocactionsmaster(string $titledocactionsmaster): self
    {
        $this->titledocactionsmaster = $titledocactionsmaster;

        return $this;
    }

    public function getLinkdocactionsmaster(): ?string
    {
        return $this->linkdocactionsmaster;
    }

    public function setLinkdocactionsmaster(string $linkdocactionsmaster): self
    {
        $this->linkdocactionsmaster = $linkdocactionsmaster;

        return $this;
    }
}
