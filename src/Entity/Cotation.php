<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\CotationRepository")
 */
class Cotation
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Crypto", inversedBy="cotation", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $crypto;

    /**
     * @ORM\Column(type="float")
     */
    private $valeur;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date;

    /**
     * @ORM\Column(type="float")
     */
    private $cours;

    /**
     * @ORM\Column(type="float")
     */
    private $evolution;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCrypto(): ?Crypto
    {
        return $this->crypto;
    }

    public function setCrypto(Crypto $crypto): self
    {
        $this->crypto = $crypto;

        return $this;
    }

    public function getValeur(): ?float
    {
        return $this->valeur;
    }

    public function setValeur(float $valeur): self
    {
        $this->valeur = $valeur;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getCours(): ?float
    {
        return $this->cours;
    }

    public function setCours(float $cours): self
    {
        $this->cours = $cours;

        return $this;
    }

    public function getEvolution(): ?float
    {
        return $this->evolution;
    }

    public function setEvolution(float $evolution): self
    {
        $this->evolution = $evolution;

        return $this;
    }
}
