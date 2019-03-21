<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\MembroEResponsavelRepository")
 */
class MembroEResponsavel
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
    private $relacao;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Membro", inversedBy="membroEResponsavels")
     * @ORM\JoinColumn(nullable=false)
     */
    private $membro;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Responsavel", inversedBy="membroEResponsavels")
     * @ORM\JoinColumn(nullable=false)
     */
    private $responsavel;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getRelacao(): ?string
    {
        return $this->relacao;
    }

    public function setRelacao(string $relacao): self
    {
        $this->relacao = $relacao;

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

    public function getResponsavel(): ?Responsavel
    {
        return $this->responsavel;
    }

    public function setResponsavel(?Responsavel $responsavel): self
    {
        $this->responsavel = $responsavel;

        return $this;
    }
}
