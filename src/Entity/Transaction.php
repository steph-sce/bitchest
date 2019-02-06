<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass="App\Repository\TransactionRepository")
 */
class Transaction
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToOne(targetEntity="App\Entity\Wallet", inversedBy="transaction", cascade={"persist", "remove"})
     * @ORM\JoinColumn(nullable=false)
     */
    private $wallet;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_buy;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_sell;

    /**
     * @ORM\Column(type="float")
     */
    private $quantity;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getWallet(): ?Wallet
    {
        return $this->wallet;
    }

    public function setWallet(Wallet $wallet): self
    {
        $this->wallet = $wallet;

        return $this;
    }

    public function getDateBuy(): ?\DateTimeInterface
    {
        return $this->date_buy;
    }

    public function setDateBuy(\DateTimeInterface $date_buy): self
    {
        $this->date_buy = $date_buy;

        return $this;
    }

    public function getDateSell(): ?\DateTimeInterface
    {
        return $this->date_sell;
    }

    public function setDateSell(\DateTimeInterface $date_sell): self
    {
        $this->date_sell = $date_sell;

        return $this;
    }

    public function getQuantity(): ?float
    {
        return $this->quantity;
    }

    public function setQuantity(float $quantity): self
    {
        $this->quantity = $quantity;

        return $this;
    }
}
