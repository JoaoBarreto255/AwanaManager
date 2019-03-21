<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ClubeRepository")
 */
class Clube
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=40)
     */
    private $nome;

    /**
     * @ORM\Column(type="string", length=500, nullable=true)
     */
    private $descricao;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Manual", mappedBy="clube", orphanRemoval=true)
     */
    private $manuals;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Faixa", mappedBy="clube", orphanRemoval=true)
     */
    private $faixas;

    public function __construct()
    {
        $this->manuals = new ArrayCollection();
        $this->faixas = new ArrayCollection();
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

    public function getDescricao(): ?string
    {
        return $this->descricao;
    }

    public function setDescricao(?string $descricao): self
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * @return Collection|Manual[]
     */
    public function getManuals(): Collection
    {
        return $this->manuals;
    }

    public function addManual(Manual $manual): self
    {
        if (!$this->manuals->contains($manual)) {
            $this->manuals[] = $manual;
            $manual->setClube($this);
        }

        return $this;
    }

    public function removeManual(Manual $manual): self
    {
        if ($this->manuals->contains($manual)) {
            $this->manuals->removeElement($manual);
            // set the owning side to null (unless already changed)
            if ($manual->getClube() === $this) {
                $manual->setClube(null);
            }
        }

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
            $faixa->setClube($this);
        }

        return $this;
    }

    public function removeFaixa(Faixa $faixa): self
    {
        if ($this->faixas->contains($faixa)) {
            $this->faixas->removeElement($faixa);
            // set the owning side to null (unless already changed)
            if ($faixa->getClube() === $this) {
                $faixa->setClube(null);
            }
        }

        return $this;
    }
}
