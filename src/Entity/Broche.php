<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use Manual;

/**
 * @ORM\Entity(repositoryClass="App\Repository\BrocheRepository")
 */
class Broche
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Premiacao")
     * @ORM\JoinColumn(nullable=false)
     */
    private $premiacao;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Emblema", inversedBy="broches")
     * @ORM\JoinColumn(nullable=false)
     */
    private $emblema;

    /**
     * @ORM\Column(type="date")
     */
    private $data;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPremiacao(): ?Premiacao
    {
        return $this->premiacao;
    }

    public function setPremiacao(?Premiacao $premiacao): self
    {
        $this->premiacao = $premiacao;

        return $this;
    }

    public function getTitulo():?string
    {
      return $this->premiacao->getTitulo();
    }

    public function getDescricao():?string
    {
      return $this->premiacao->getDescricao();
    }

    public function getManual():?Manual
    {
      return $this->premiacao->getManual();
    }

    public function getEmblema(): ?Emblema
    {
        return $this->emblema;
    }

    public function setEmblema(?Emblema $emblema): self
    {
        $this->emblema = $emblema;

        return $this;
    }

    public function getData(): ?\DateTimeInterface
    {
        return $this->data;
    }

    public function setData(\DateTimeInterface $data): self
    {
        $this->data = $data;

        return $this;
    }
}
