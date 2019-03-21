<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EmblemaTemplateRepository")
 */
class EmblemaTemplate
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=60)
     */
    private $titulo;

    /**
     * @ORM\Column(type="string", length=400, nullable=true)
     */
    private $descricao;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Manual", inversedBy="emblemaTemplate", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $manual;

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

    public function getManual(): ?Manual
    {
        return $this->manual;
    }

    public function setManual(Manual $manual): self
    {
        $this->manual = $manual;

        return $this;
    }
}
