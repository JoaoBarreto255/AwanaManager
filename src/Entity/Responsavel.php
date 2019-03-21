<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ResponsavelRepository")
 */
class Responsavel
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=180)
     */
    private $nome;

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
     * @ORM\Column(type="string", length=180)
     */
    private $email;

    /**
     * @ORM\Column(type="string", length=120)
     */
    private $senha;

    /**
     * @ORM\Column(type="string", length=1)
     */
    private $sexo;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Telefone")
     */
    private $telefones;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\MembroEResponsavel", mappedBy="responsavel", orphanRemoval=true)
     */
    private $membroEResponsavels;

    public function __construct()
    {
        $this->telefones = new ArrayCollection();
        $this->membroEResponsavels = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNome(): ?string
    {
        return $this->nome;
    }

    public function setNome(string $nome): self
    {
        $this->nome = $nome;

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

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getSenha(): ?string
    {
        return $this->senha;
    }

    public function setSenha(string $senha): self
    {
        $this->senha = $senha;

        return $this;
    }

    public function getSexo(): ?string
    {
        return $this->sexo;
    }

    public function setSexo(string $sexo): self
    {
        $this->sexo = $sexo;

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

    /**
     * @return Collection|MembroEResponsavel[]
     */
    public function getMembroEResponsavels(): Collection
    {
        return $this->membroEResponsavels;
    }

    public function addMembroEResponsavel(MembroEResponsavel $membroEResponsavel): self
    {
        if (!$this->membroEResponsavels->contains($membroEResponsavel)) {
            $this->membroEResponsavels[] = $membroEResponsavel;
            $membroEResponsavel->setResponsavel($this);
        }

        return $this;
    }

    public function removeMembroEResponsavel(MembroEResponsavel $membroEResponsavel): self
    {
        if ($this->membroEResponsavels->contains($membroEResponsavel)) {
            $this->membroEResponsavels->removeElement($membroEResponsavel);
            // set the owning side to null (unless already changed)
            if ($membroEResponsavel->getResponsavel() === $this) {
                $membroEResponsavel->setResponsavel(null);
            }
        }

        return $this;
    }
}
