<?php

namespace App\Entity;

use App\Repository\FieldtripphotosRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FieldtripphotosRepository::class)
 */
class Fieldtripphotos
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
    private $filefieldtripphoto;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $altfieldtripphoto;

    /**
     * @ORM\ManyToOne(targetEntity=Fieldtrips::class, inversedBy="connectfieldtrip")
     */
    private $fieldstripsorigin;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFilefieldtripphoto(): ?string
    {
        return $this->filefieldtripphoto;
    }

    public function setFilefieldtripphoto(string $filefieldtripphoto): self
    {
        $this->filefieldtripphoto = $filefieldtripphoto;

        return $this;
    }

    public function getAltfieldtripphoto(): ?string
    {
        return $this->altfieldtripphoto;
    }

    public function setAltfieldtripphoto(?string $altfieldtripphoto): self
    {
        $this->altfieldtripphoto = $altfieldtripphoto;

        return $this;
    }

    public function getFieldstripsorigin(): ?Fieldtrips
    {
        return $this->fieldstripsorigin;
    }

    public function setFieldstripsorigin(?Fieldtrips $fieldstripsorigin): self
    {
        $this->fieldstripsorigin = $fieldstripsorigin;

        return $this;
    }
}
