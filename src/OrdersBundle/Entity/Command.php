<?php

namespace OrdersBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Command
 *
 * @ORM\Table(name="command")
 * @ORM\Entity(repositoryClass="OrdersBundle\Repository\CommandRepository")
 */
class Command
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="marketplace", type="string", length=255)
     */
    private $marketplace;

    /**
     * @var int
     *
     * @ORM\Column(name="idFlux", type="integer")
     */
    private $idFlux;

    /**
     * @var string
     *
     * @ORM\Column(name="orderMrid", type="string", length=255)
     */
    private $orderMrid;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="purchaseDate", type="datetime")
     */
    private $purchaseDate;

    /**
     * @var float
     *
     * @ORM\Column(name="amount", type="float")
     */
    private $amount;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set marketplace
     *
     * @param string $marketplace
     *
     * @return Command
     */
    public function setMarketplace($marketplace)
    {
        $this->marketplace = $marketplace;

        return $this;
    }

    /**
     * Get marketplace
     *
     * @return string
     */
    public function getMarketplace()
    {
        return $this->marketplace;
    }

    /**
     * Set idFlux
     *
     * @param integer $idFlux
     *
     * @return Command
     */
    public function setIdFlux($idFlux)
    {
        $this->idFlux = $idFlux;

        return $this;
    }

    /**
     * Get idFlux
     *
     * @return int
     */
    public function getIdFlux()
    {
        return $this->idFlux;
    }

    /**
     * Set orderMrid
     *
     * @param string $orderMrid
     *
     * @return Command
     */
    public function setOrderMrid($orderMrid)
    {
        $this->orderMrid = $orderMrid;

        return $this;
    }

    /**
     * Get orderMrid
     *
     * @return string
     */
    public function getOrderMrid()
    {
        return $this->orderMrid;
    }

    /**
     * Set purchaseDate
     *
     * @param \DateTime $purchaseDate
     *
     * @return Command
     */
    public function setPurchaseDate($purchaseDate)
    {
        $this->purchaseDate = $purchaseDate;

        return $this;
    }

    /**
     * Get purchaseDate
     *
     * @return \DateTime
     */
    public function getPurchaseDate()
    {
        return $this->purchaseDate;
    }

    /**
     * Set amount
     *
     * @param float $amount
     *
     * @return Command
     */
    public function setAmount($amount)
    {
        $this->amount = $amount;

        return $this;
    }

    /**
     * Get amount
     *
     * @return float
     */
    public function getAmount()
    {
        return $this->amount;
    }

}

