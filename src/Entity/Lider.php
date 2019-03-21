<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\LiderRepository")
 */
class Lider
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $fullName;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=120)
     */
    private $password;

    /**
     * @ORM\Column(type="string", length=80)
     */
    private $login;

    /**
     * @ORM\Column(type="date")
     */
    private $dataDeNascimento;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Endereco", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $endereco;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Telefone")
     */
    private $telefones;

    /**
     * @ORM\Column(type="string", length=50, nullable=true)
     */
    private $encargo;


    public function __construct()
    {
        $this->telefones = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFullName(): ?string
    {
        return $this->fullName;
    }

    public function setFullName(string $fullName): self
    {
        $this->fullName = $fullName;

        return $this;
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

    public function getPassword(): ?string
    {
        return $this->password;
    }

    public function setPassword(string $password): self
    {
        $this->password = $password;

        return $this;
    }

    public function getLogin(): ?string
    {
        return $this->login;
    }

    public function setLogin(string $login): self
    {
        $this->login = $login;

        return $this;
    }

    public function getDataDeNascimento(): ?\DateTimeInterface
    {
        return $this->dataDeNascimento;
    }

    public function setDataDeNascimento(\DateTimeInterface $dataDeNascimento): self
    {
        $this->dataDeNascimento = $dataDeNascimento;

        return $this;
    }

    public function getEndereco(): ?Endereco
    {
        return $this->endereco;
    }

    public function setEndereco(Endereco $endereco): self
    {
        $this->endereco = $endereco;

        return $this;
    }

    /**
     * @return Collection|Telefone[]
     */
    public function getTelefones(): Collection
    {
        return $this->telefones;
    }

    public function addTelefone(Telefone $telefone): self
    {
        if (!$this->telefones->contains($telefone)) {
            $this->telefones[] = $telefone;
        }

        return $this;
    }

    public function removeTelefone(Telefone $telefone): self
    {
        if ($this->telefones->contains($telefone)) {
            $this->telefones->removeElement($telefone);
        }

        return $this;
    }

    public function getEncargo(): ?string
    {
        return $this->encargo;
    }

    public function setEncargo(?string $encargo): self
    {
        $this->encargo = $encargo;

        return $this;
    }
}
