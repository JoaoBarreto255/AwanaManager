<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\JogoRepository")
 */
class Jogo
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=120)
     */
    private $titulo;

    /**
     * @ORM\Column(type="string", length=400, nullable=true)
     */
    private $descricao;

    /**
     * @ORM\Column(type="float")
     */
    private $pontuacao;

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

    public function getPontuacao(): ?float
    {
        return $this->pontuacao;
    }

    public function setPontuacao(float $pontuacao): self
    {
        $this->pontuacao = $pontuacao;

        return $this;
    }
}
