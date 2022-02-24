<?php

namespace App\Entity;

use App\Repository\DocActionsAssosRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=DocActionsAssosRepository::class)
 */
class DocActionsAssos
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
    private $titledocactionsasso;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $linkdocactionsasso;

    /**
     * @ORM\ManyToOne(targetEntity=ActionsAssos::class, inversedBy="actionsassosdoc")
     */
    private $docactasso;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitledocactionsasso(): ?string
    {
        return $this->titledocactionsasso;
    }

    public function setTitledocactionsasso(string $titledocactionsasso): self
    {
        $this->titledocactionsasso = $titledocactionsasso;

        return $this;
    }

    public function getLinkdocactionsasso(): ?string
    {
        return $this->linkdocactionsasso;
    }

    public function setLinkdocactionsasso(?string $linkdocactionsasso): self
    {
        $this->linkdocactionsasso = $linkdocactionsasso;

        return $this;
    }

    public function getDocactasso(): ?ActionsAssos
    {
        return $this->docactasso;
    }

    public function setDocactasso(?ActionsAssos $docactasso): self
    {
        $this->docactasso = $docactasso;

        return $this;
    }
}
