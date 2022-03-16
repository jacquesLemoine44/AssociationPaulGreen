<?php

namespace App\Entity;

use App\Repository\FunctionsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=FunctionsRepository::class)
 */
class Functions
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
    private $mission;

    /**
     * @ORM\Column(type="text", nullable=true)
     */
    private $descriptionFunction;

    /**
     * @ORM\ManyToMany(targetEntity=Users::class, mappedBy="functionUser")
     */
    private $users;

    /**
     * @ORM\Column(type="integer", nullable=true)
     */
    private $levelFunction;

    public function __construct()
    {
        $this->users = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getMission(): ?string
    {
        return $this->mission;
    }

    public function setMission(string $mission): self
    {
        $this->mission = $mission;

        return $this;
    }

    public function getDescriptionFunction(): ?string
    {
        return $this->descriptionFunction;
    }

    public function setDescriptionFunction(?string $descriptionFunction): self
    {
        $this->descriptionFunction = $descriptionFunction;

        return $this;
    }

    /**
     * @return Collection<int, Users>
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(Users $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users[] = $user;
            $user->addFunctionUser($this);
        }

        return $this;
    }

    public function removeUser(Users $user): self
    {
        if ($this->users->removeElement($user)) {
            $user->removeFunctionUser($this);
        }

        return $this;
    }

    public function getLevelFunction(): ?int
    {
        return $this->levelFunction;
    }

    public function setLevelFunction(?int $levelFunction): self
    {
        $this->levelFunction = $levelFunction;

        return $this;
    }
}
