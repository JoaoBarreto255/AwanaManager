<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EventoRepository")
 */
class Evento
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=80)
     */
    private $titulo;

    /**
     * @ORM\Column(type="string", length=300, nullable=true)
     */
    private $descricao;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\EventoDescricao", mappedBy="relation", orphanRemoval=true)
     */
    private $miniEventos;

    public function __construct()
    {
        $this->miniEventos = new ArrayCollection();
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

    /**
     * @return Collection|EventoDescricao[]
     */
    public function getMiniEventos(): Collection
    {
        return $this->miniEventos;
    }

    public function addMiniEvento(EventoDescricao $miniEvento): self
    {
        if (!$this->miniEventos->contains($miniEvento)) {
            $this->miniEventos[] = $miniEvento;
            $miniEvento->setRelation($this);
        }

        return $this;
    }

    public function removeMiniEvento(EventoDescricao $miniEvento): self
    {
        if ($this->miniEventos->contains($miniEvento)) {
            $this->miniEventos->removeElement($miniEvento);
            // set the owning side to null (unless already changed)
            if ($miniEvento->getRelation() === $this) {
                $miniEvento->setRelation(null);
            }
        }

        return $this;
    }
}
