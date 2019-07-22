<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cart
 *
 * @ORM\Table(name="cart", indexes={@ORM\Index(name="client_id", columns={"client_id"}), @ORM\Index(name="product_id", columns={"product_id"})})
 * @ORM\Entity
 */
class Cart
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var int
     *
     * @ORM\Column(name="nb_order", type="integer", nullable=false)
     */
    private $nbOrder;

    /**
     * @var string
     *
     * @ORM\Column(name="payment_method", type="text", length=65535, nullable=false)
     */
    private $paymentMethod;

    /**
     * @var \Product
     *
     * @ORM\ManyToOne(targetEntity="Product")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="product_id", referencedColumnName="id")
     * })
     */
    private $product;

    /**
     * @var \ClientAddress
     *
     * @ORM\ManyToOne(targetEntity="ClientAddress")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="client_id", referencedColumnName="id")
     * })
     */
    private $client;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNbOrder(): ?int
    {
        return $this->nbOrder;
    }

    public function setNbOrder(int $nbOrder): self
    {
        $this->nbOrder = $nbOrder;

        return $this;
    }

    public function getPaymentMethod(): ?string
    {
        return $this->paymentMethod;
    }

    public function setPaymentMethod(string $paymentMethod): self
    {
        $this->paymentMethod = $paymentMethod;

        return $this;
    }

    public function getProduct(): ?Product
    {
        return $this->product;
    }

    public function setProduct(?Product $product): self
    {
        $this->product = $product;

        return $this;
    }

    public function getClient(): ?ClientAddress
    {
        return $this->client;
    }

    public function setClient(?ClientAddress $client): self
    {
        $this->client = $client;

        return $this;
    }


}
