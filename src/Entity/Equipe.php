<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EquipeRepository")
 */
class Equipe
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=30)
     */
    private $cor;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\EventoDescricao", mappedBy="time")
     */
    private $eventos;

    public function __construct()
    {
        $this->eventos = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCor(): ?string
    {
        return $this->cor;
    }

    public function setCor(string $cor): self
    {
        $this->cor = $cor;

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
            $evento->setTime($this);
        }

        return $this;
    }

    public function removeEvento(EventoDescricao $evento): self
    {
        if ($this->eventos->contains($evento)) {
            $this->eventos->removeElement($evento);
            // set the owning side to null (unless already changed)
            if ($evento->getTime() === $this) {
                $evento->setTime(null);
            }
        }

        return $this;
    }
}
