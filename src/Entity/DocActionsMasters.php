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

    /**
     * @ORM\ManyToOne(targetEntity=ActionsMasters::class, inversedBy="ActionsDocs")
     */
    private $DocActions;

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

    public function getDocActions(): ?ActionsMasters
    {
        return $this->DocActions;
    }

    public function setDocActions(?ActionsMasters $DocActions): self
    {
        $this->DocActions = $DocActions;

        return $this;
    }
}
