<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MembroRepository")
 */
class Membro
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
    private $nome;

    /**
     * @ORM\Column(type="date")
     */
    private $dataDeNascimento;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\MembroEResponsavel", mappedBy="membro", orphanRemoval=true)
     */
    private $membroEResponsavels;

    /**
     * @ORM\Column(type="string", length=120, nullable=true)
     */
    private $email;

    /**
     * @ORM\ManyToMany(targetEntity="App\Entity\Telefone")
     */
    private $telefones;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Endereco", cascade={"persist", "remove"})
     */
    private $endereco;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $foto;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Faixa", mappedBy="membro", orphanRemoval=true)
     */
    private $faixas;

    /**
     * @ORM\Column(type="date")
     */
    private $ingresso;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $saida;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\EventoDescricao", mappedBy="membro")
     */
    private $eventos;

    public function __construct()
    {
        $this->membroEResponsavels = new ArrayCollection();
        $this->telefones = new ArrayCollection();
        $this->faixas = new ArrayCollection();
        $this->eventos = new ArrayCollection();
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
            $membroEResponsavel->setMembro($this);
        }

        return $this;
    }

    public function removeMembroEResponsavel(MembroEResponsavel $membroEResponsavel): self
    {
        if ($this->membroEResponsavels->contains($membroEResponsavel)) {
            $this->membroEResponsavels->removeElement($membroEResponsavel);
            // set the owning side to null (unless already changed)
            if ($membroEResponsavel->getMembro() === $this) {
                $membroEResponsavel->setMembro(null);
            }
        }

        return $this;
    }

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(?string $email): self
    {
        $this->email = $email;

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

    public function getEndereco(): ?Endereco
    {
        return $this->endereco;
    }

    public function setEndereco(?Endereco $endereco): self
    {
        $this->endereco = $endereco;

        return $this;
    }

    public function getFoto(): ?string
    {
        return $this->foto;
    }

    public function setFoto(?string $foto): self
    {
        $this->foto = $foto;

        return $this;
    }

    /**
     * @return Collection|Faixa[]
     */
    public function getFaixas(): Collection
    {
        return $this->faixas;
    }

    public function addFaixa(Faixa $faixa): self
    {
        if (!$this->faixas->contains($faixa)) {
            $this->faixas[] = $faixa;
            $faixa->setMembro($this);
        }

        return $this;
    }

    public function removeFaixa(Faixa $faixa): self
    {
        if ($this->faixas->contains($faixa)) {
            $this->faixas->removeElement($faixa);
            // set the owning side to null (unless already changed)
            if ($faixa->getMembro() === $this) {
                $faixa->setMembro(null);
            }
        }

        return $this;
    }

    public function getIngresso(): ?\DateTimeInterface
    {
        return $this->ingresso;
    }

    public function setIngresso(\DateTimeInterface $ingresso): self
    {
        $this->ingresso = $ingresso;

        return $this;
    }

    public function getSaida(): ?\DateTimeInterface
    {
        return $this->saida;
    }

    public function setSaida(?\DateTimeInterface $saida): self
    {
        $this->saida = $saida;

        return $this;
    }

    /**
     * @return Collection|EventoDescricao[]
     */
    public function getEventos(): Collection
    {
        return $this->eventos;
    }

    public function addEvento(EventoDescricao $evento): self
    {
        if (!$this->eventos->contains($evento)) {
            $this->eventos[] = $evento;
            $evento->setMembro($this);
        }

        return $this;
    }

    public function removeEvento(EventoDescricao $evento): self
    {
        if ($this->eventos->contains($evento)) {
            $this->eventos->removeElement($evento);
            // set the owning side to null (unless already changed)
            if ($evento->getMembro() === $this) {
                $evento->setMembro(null);
            }
        }

        return $this;
    }
}
