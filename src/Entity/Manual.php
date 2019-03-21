<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\ManualRepository")
 */
class Manual
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
    private $titulo;

    /**
     * @ORM\Column(type="string", length=400, nullable=true)
     */
    private $descricao;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Clube", inversedBy="manuals")
     * @ORM\JoinColumn(nullable=false)
     */
    private $clube;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Premiacao", mappedBy="manual", orphanRemoval=true)
     */
    private $premiacoes;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\EmblemaTemplate", mappedBy="manual", cascade={"persist", "remove"})
     */
    private $emblemaTemplate;

    public function __construct()
    {
        $this->premiacoes = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTitulo(): ?string
    {
        return $this->titulo;
    }

    public function setTitulo(string $titulo): self
    {
        $this->titulo = $titulo;

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

    public function getClube(): ?Clube
    {
        return $this->clube;
    }

    public function setClube(?Clube $clube): self
    {
        $this->clube = $clube;

        return $this;
    }

    /**
     * @return Collection|Premiacao[]
     */
    public function getPremiacoes(): Collection
    {
        return $this->premiacoes;
    }

    public function addPremiacao(Premiacoes $premiacao): self
    {
        if (!$this->premiacoes->contains($premiacao)) {
            $this->premiacoes[] = $premiacao;
            $premiaco->setManual($this);
        }

        return $this;
    }

    public function removePremiacao(Premiacoes $premiacao): self
    {
        if ($this->premiacoes->contains($premiacao)) {
            $this->premiacoes->removeElement($premiacao);
            // set the owning side to null (unless already changed)
            if ($premiacao->getManual() === $this) {
                $premiacao->setManual(null);
            }
        }

        return $this;
    }

    public function getEmblemaTemplate(): ?EmblemaTemplate
    {
        return $this->emblemaTemplate;
    }

    public function setEmblemaTemplate(EmblemaTemplate $emblemaTemplate): self
    {
        $this->emblemaTemplate = $emblemaTemplate;

        // set the owning side of the relation if necessary
        if ($this !== $emblemaTemplate->getManual()) {
            $emblemaTemplate->setManual($this);
        }

        return $this;
    }
}
