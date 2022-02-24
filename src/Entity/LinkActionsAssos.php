<?php

namespace App\Entity;

use App\Repository\LinkActionsAssosRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=LinkActionsAssosRepository::class)
 */
class LinkActionsAssos
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
    private $titlelinkactionsasso;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $linkactionsasso;

    /**
     * @ORM\ManyToOne(targetEntity=ActionsAssos::class, inversedBy="actionsassoslink")
     */
    private $linkactasso;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitlelinkactionsasso(): ?string
    {
        return $this->titlelinkactionsasso;
    }

    public function setTitlelinkactionsasso(string $titlelinkactionsasso): self
    {
        $this->titlelinkactionsasso = $titlelinkactionsasso;

        return $this;
    }

    public function getLinkactionsasso(): ?string
    {
        return $this->linkactionsasso;
    }

    public function setLinkactionsasso(?string $linkactionsasso): self
    {
        $this->linkactionsasso = $linkactionsasso;

        return $this;
    }

    public function getLinkactasso(): ?ActionsAssos
    {
        return $this->linkactasso;
    }

    public function setLinkactasso(?ActionsAssos $linkactasso): self
    {
        $this->linkactasso = $linkactasso;

        return $this;
    }
}
