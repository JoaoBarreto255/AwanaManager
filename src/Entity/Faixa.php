<?php

namespace App\Entity;

use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\FaixaRepository")
 */
class Faixa
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Membro", inversedBy="faixas")
     * @ORM\JoinColumn(nullable=false)
     */
    private $membro;

    /**
     * @ORM\ManyToOne(targetEntity="App\Entity\Clube", inversedBy="faixas")
     * @ORM\JoinColumn(nullable=false)
     */
    private $clube;

    /**
     * @ORM\OneToMany(targetEntity="App\Entity\Emblema", mappedBy="faixa", orphanRemoval=true)
     */
    private $emblemas;

    public function __construct()
    {
        $this->emblemas = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
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
     * @return Collection|Emblema[]
     */
    public function getEmblemas(): Collection
    {
        return $this->emblemas;
    }

    public function addEmblema(Emblema $emblema): self
    {
        if (!$this->emblemas->contains($emblema)) {
            $this->emblemas[] = $emblema;
            $emblema->setFaixa($this);
        }

        return $this;
    }

    public function removeEmblema(Emblema $emblema): self
    {
        if ($this->emblemas->contains($emblema)) {
            $this->emblemas->removeElement($emblema);
            // set the owning side to null (unless already changed)
            if ($emblema->getFaixa() === $this) {
                $emblema->setFaixa(null);
            }
        }

        return $this;
    }
}
