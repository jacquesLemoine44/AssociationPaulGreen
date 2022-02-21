<?php

namespace App\Entity;

use App\Repository\UsersRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Security\Core\User\PasswordAuthenticatedUserInterface;
use Symfony\Component\Security\Core\User\UserInterface;

/**
 * @ORM\Entity(repositoryClass=UsersRepository::class)
 * @UniqueEntity(fields={"email"}, message="There is already an account with this email")
 */
class Users implements UserInterface, PasswordAuthenticatedUserInterface
{

    public const ROLE_USER = 'ROLE_USER';
    public const ROLE_OTHER = 'ROLE_OTHER';
    public const ROLE_GE = 'ROLE_GE';
    public const ROLE_ADMIN = 'ROLE_ADMIN';

    public function __construct()
        {
        $this->roles = [self::ROLE_USER];
        $this->functionUser = new ArrayCollection();
        }

    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180, unique=true)
     */
    private $email;

    /**
     * @ORM\Column(type="json")
     */
    private $roles = [];

    /**
     * @var string The hashed password
     * @ORM\Column(type="string")
     */
    private $password;

    /**
     * @ORM\ManyToMany(targetEntity=Functions::class, inversedBy="users")
     */
    private $functionUser;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $nameUser;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $firstNameUser;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $address1User;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $address2User;

    /**
     * @ORM\Column(type="string", length=100, nullable=true)
     */
    private $cpUser;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $townUser;

    /**
     * @ORM\Column(type="string", length=50)
     */
    private $phoneUser;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $photoUser;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $studyUser;

    /**
     * @ORM\Column(type="integer")
     */
    private $yearMenbershipUser;

    /**
     * @ORM\Column(type="boolean")
     */
    private $newslettersNewsUser;

    /**
     * @ORM\Column(type="boolean")
     */
    private $newsletterIntershipUser;

    /**
     * @ORM\Column(type="boolean")
     */
    private $newsletterAssosUser;

    /**
     * @ORM\Column(type="boolean")
     */
    private $contactinfoUser;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    /**
     * A visual identifier that represents this user.
     *
     * @see UserInterface
     */
    public function getUserIdentifier(): string
    {
        return (string) $this->email;
    }

    /**
     * @deprecated since Symfony 5.3, use getUserIdentifier instead
     */
    public function getUsername(): string
    {
        return (string) $this->email;
    }

    /**
     * @see UserInterface
     */
    public function getRoles(): array
    {
        $roles = $this->roles;
        // guarantee every user at least has ROLE_USER
        $roles[] = 'ROLE_USER';

        return array_unique($roles);
    }

    public function setRoles(array $roles): self
    {
        $this->roles = $roles;

        return $this;
    }

    /**
     * @see PasswordAuthenticatedUserInterface
     */
    public function getPassword(): string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    /**
     * Returning a salt is only needed, if you are not using a modern
     * hashing algorithm (e.g. bcrypt or sodium) in your security.yaml.
     *
     * @see UserInterface
     */
    public function getSalt(): ?string
    {
        return null;
    }

    /**
     * @see UserInterface
     */
    public function eraseCredentials()
    {
        // If you store any temporary, sensitive data on the user, clear it here
        // $this->plainPassword = null;
    }

    /**
     * @return Collection<int, Functions>
     */
    public function getFunctionUser(): Collection
    {
        return $this->functionUser;
    }

    public function addFunctionUser(Functions $functionUser): self
    {
        if (!$this->functionUser->contains($functionUser)) {
            $this->functionUser[] = $functionUser;
        }

        return $this;
    }

    public function removeFunctionUser(Functions $functionUser): self
    {
        $this->functionUser->removeElement($functionUser);

        return $this;
    }

    public function getNameUser(): ?string
    {
        return $this->nameUser;
    }

    public function setNameUser(string $nameUser): self
    {
        $this->nameUser = $nameUser;

        return $this;
    }

    public function getFirstNameUser(): ?string
    {
        return $this->firstNameUser;
    }

    public function setFirstNameUser(string $firstNameUser): self
    {
        $this->firstNameUser = $firstNameUser;

        return $this;
    }

    public function getAddress1User(): ?string
    {
        return $this->address1User;
    }

    public function setAddress1User(?string $address1User): self
    {
        $this->address1User = $address1User;

        return $this;
    }

    public function getAddress2User(): ?string
    {
        return $this->address2User;
    }

    public function setAddress2User(?string $address2User): self
    {
        $this->address2User = $address2User;

        return $this;
    }

    public function getCpUser(): ?string
    {
        return $this->cpUser;
    }

    public function setCpUser(?string $cpUser): self
    {
        $this->cpUser = $cpUser;

        return $this;
    }

    public function getTownUser(): ?string
    {
        return $this->townUser;
    }

    public function setTownUser(?string $townUser): self
    {
        $this->townUser = $townUser;

        return $this;
    }

    public function getPhoneUser(): ?string
    {
        return $this->phoneUser;
    }

    public function setPhoneUser(string $phoneUser): self
    {
        $this->phoneUser = $phoneUser;

        return $this;
    }

    public function getPhotoUser(): ?string
    {
        return $this->photoUser;
    }

    public function setPhotoUser(?string $photoUser): self
    {
        $this->photoUser = $photoUser;

        return $this;
    }

    public function getStudyUser(): ?string
    {
        return $this->studyUser;
    }

    public function setStudyUser(?string $studyUser): self
    {
        $this->studyUser = $studyUser;

        return $this;
    }

    public function getYearMenbershipUser(): ?int
    {
        return $this->yearMenbershipUser;
    }

    public function setYearMenbershipUser(int $yearMenbershipUser): self
    {
        $this->yearMenbershipUser = $yearMenbershipUser;

        return $this;
    }

    public function getNewslettersNewsUser(): ?bool
    {
        return $this->newslettersNewsUser;
    }

    public function setNewslettersNewsUser(bool $newslettersNewsUser): self
    {
        $this->newslettersNewsUser = $newslettersNewsUser;

        return $this;
    }

    public function getNewsletterIntershipUser(): ?bool
    {
        return $this->newsletterIntershipUser;
    }

    public function setNewsletterIntershipUser(bool $newsletterIntershipUser): self
    {
        $this->newsletterIntershipUser = $newsletterIntershipUser;

        return $this;
    }

    public function getNewsletterAssosUser(): ?bool
    {
        return $this->newsletterAssosUser;
    }

    public function setNewsletterAssosUser(bool $newsletterAssosUser): self
    {
        $this->newsletterAssosUser = $newsletterAssosUser;

        return $this;
    }

    public function getContactinfoUser(): ?bool
    {
        return $this->contactinfoUser;
    }

    public function setContactinfoUser(bool $contactinfoUser): self
    {
        $this->contactinfoUser = $contactinfoUser;

        return $this;
    }
}
