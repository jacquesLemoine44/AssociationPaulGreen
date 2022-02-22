<?php

namespace App\Entity;

use App\Repository\SocialNetworksRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=SocialNetworksRepository::class)
 */
class SocialNetworks
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $socialNetwork;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $logoSocialnetwork;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $codeSocialnetwork;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $linkSocialnetwork;

    /**
     * @ORM\ManyToOne(targetEntity=Params::class, inversedBy="paramsocial")
     */
    private $params;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSocialNetwork(): ?string
    {
        return $this->socialNetwork;
    }

    public function setSocialNetwork(string $socialNetwork): self
    {
        $this->socialNetwork = $socialNetwork;

        return $this;
    }

    public function getLogoSocialnetwork(): ?string
    {
        return $this->logoSocialnetwork;
    }

    public function setLogoSocialnetwork(?string $logoSocialnetwork): self
    {
        $this->logoSocialnetwork = $logoSocialnetwork;

        return $this;
    }

    public function getCodeSocialnetwork(): ?string
    {
        return $this->codeSocialnetwork;
    }

    public function setCodeSocialnetwork(?string $codeSocialnetwork): self
    {
        $this->codeSocialnetwork = $codeSocialnetwork;

        return $this;
    }

    public function getLinkSocialnetwork(): ?string
    {
        return $this->linkSocialnetwork;
    }

    public function setLinkSocialnetwork(?string $linkSocialnetwork): self
    {
        $this->linkSocialnetwork = $linkSocialnetwork;

        return $this;
    }

    public function getParams(): ?Params
    {
        return $this->params;
    }

    public function setParams(?Params $params): self
    {
        $this->params = $params;

        return $this;
    }
}
