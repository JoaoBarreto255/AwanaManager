<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EmblemaRepository")
 */
class Emblema
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Faixa", inversedBy="emblemas")
     * @ORM\JoinColumn(nullable=false)
     */
    private $faixa;

    /**
     * @ORM\Column(type="date")
     */
    private $inicio;

    /**
     * @ORM\Column(type="date", nullable=true)
     */
    private $termino;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Broche", mappedBy="emblema", orphanRemoval=true)
     */
    private $broches;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Manual")
     * @ORM\JoinColumn(nullable=false)
     */
    private $manual;

    public function __construct()
    {
        $this->broches = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFaixa(): ?Faixa
    {
        return $this->faixa;
    }

    public function setFaixa(?Faixa $faixa): self
    {
        $this->faixa = $faixa;

        return $this;
    }

    public function getInicio(): ?\DateTimeInterface
    {
        return $this->inicio;
    }

    public function setInicio(\DateTimeInterface $inicio): self
    {
        $this->inicio = $inicio;

        return $this;
    }

    public function getTermino(): ?\DateTimeInterface
    {
        return $this->termino;
    }

    public function setTermino(?\DateTimeInterface $termino): self
    {
        $this->termino = $termino;

        return $this;
    }

    /**
     * @return Collection|Broche[]
     */
    public function getBroches(): Collection
    {
        return $this->broches;
    }

    public function addBroche(Broche $broch): self
    {
        if (!$this->broches->contains($broch)) {
            $this->broches[] = $broch;
            $broch->setEmblema($this);
        }

        return $this;
    }

    public function removeBroche(Broche $broch): self
    {
        if ($this->broches->contains($broch)) {
            $this->broches->removeElement($broch);
            // set the owning side to null (unless already changed)
            if ($broch->getEmblema() === $this) {
                $broch->setEmblema(null);
            }
        }

        return $this;
    }

    public function getManual(): ?Manual
    {
        return $this->manual;
    }

    public function setManual(?Manual $manual): self
    {
        $this->manual = $manual;

        return $this;
    }

    public function getTitulo(): ?string
    {
      $this->manual->getEmblemaTemplate()->getTitulo();
    }

    public function getDescricao(): ?string
    {
      $this->manual->getEmblemaTemplate()->getDescricao();
    }
}
