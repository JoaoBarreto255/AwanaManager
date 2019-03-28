<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EventoDescricaoRepository")
 */
class EventoDescricao
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Evento", inversedBy="miniEventos")
     * @ORM\JoinColumn(nullable=false)
     */
    private $relation;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\EventoTemplate")
     * @ORM\JoinColumn(nullable=false)
     */
    private $template;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Equipe", inversedBy="eventos")
     */
    private $time;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Membro", inversedBy="eventos")
     */
    private $membro;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRelation(): ?Evento
    {
        return $this->relation;
    }

    public function setRelation(?Evento $relation): self
    {
        $this->relation = $relation;

        return $this;
    }

    public function getTemplate(): ?EventoTemplate
    {
        return $this->template;
    }

    public function setTemplate(?EventoTemplate $template): self
    {
        $this->template = $template;

        return $this;
    }

    public function getTime(): ?Equipe
    {
        return $this->time;
    }

    public function setTime(?Equipe $time): self
    {
        $this->time = $time;

        return $this;
    }

    public function getMembro(): ?Membro
    {
        return $this->membro;
    }

    public function setMembro(?Membro $membro): self
    {
        $this->membro = $membro;

        return $this;
    }
}
