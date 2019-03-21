<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\EnderecoRepository")
 */
class Endereco
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=2)
     */
    private $UF;

    /**
     * @ORM\Column(type="string", length=9)
     */
    private $CEP;

    /**
     * @ORM\Column(type="string", length=180)
     */
    private $cidade;

    /**
     * @ORM\Column(type="string", length=180)
     */
    private $bairro;

    /**
     * @ORM\Column(type="string", length=180)
     */
    private $logradouro;

    /**
     * @ORM\Column(type="smallint")
     */
    private $numero;

    /**
     * @ORM\Column(type="string", length=255, nullable=true)
     */
    private $complemento;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUF(): ?string
    {
        return $this->UF;
    }

    public function setUF(string $UF): self
    {
        $this->UF = $UF;

        return $this;
    }

    public function getCEP(): ?string
    {
        return $this->CEP;
    }

    public function setCEP(string $CEP): self
    {
        $this->CEP = $CEP;

        return $this;
    }

    public function getCidade(): ?string
    {
        return $this->cidade;
    }

    public function setCidade(string $cidade): self
    {
        $this->cidade = $cidade;

        return $this;
    }

    public function getBairro(): ?string
    {
        return $this->bairro;
    }

    public function setBairro(string $bairro): self
    {
        $this->bairro = $bairro;

        return $this;
    }

    public function getLogradouro(): ?string
    {
        return $this->logradouro;
    }

    public function setLogradouro(string $logradouro): self
    {
        $this->logradouro = $logradouro;

        return $this;
    }

    public function getNumero(): ?int
    {
        return $this->numero;
    }

    public function setNumero(int $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    public function getComplemento(): ?string
    {
        return $this->complemento;
    }

    public function setComplemento(?string $complemento): self
    {
        $this->complemento = $complemento;

        return $this;
    }
}
