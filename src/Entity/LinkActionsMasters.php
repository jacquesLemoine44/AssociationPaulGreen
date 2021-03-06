<?php

namespace App\Entity;

use App\Repository\LinkActionsMastersRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LinkActionsMastersRepository::class)
 */
class LinkActionsMasters
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
    private $titlelinkactionsmaster;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $linkactionmaster;

    /**
     * @ORM\ManyToOne(targetEntity=ActionsMasters::class, inversedBy="ActionsLinks")
     */
    private $LinksActions;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitlelinkactionsmaster(): ?string
    {
        return $this->titlelinkactionsmaster;
    }

    public function setTitlelinkactionsmaster(string $titlelinkactionsmaster): self
    {
        $this->titlelinkactionsmaster = $titlelinkactionsmaster;

        return $this;
    }

    public function getLinkactionmaster(): ?string
    {
        return $this->linkactionmaster;
    }

    public function setLinkactionmaster(string $linkactionmaster): self
    {
        $this->linkactionmaster = $linkactionmaster;

        return $this;
    }

    public function getLinksActions(): ?ActionsMasters
    {
        return $this->LinksActions;
    }

    public function setLinksActions(?ActionsMasters $LinksActions): self
    {
        $this->LinksActions = $LinksActions;

        return $this;
    }
}
