<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Product
 *
 * @ORM\Table(name="product")
 * @ORM\Entity
 */
class Product
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
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=255, nullable=false)
     */
    private $name;

    /**
     * @var int
     *
     * @ORM\Column(name="price", type="integer", nullable=false)
     */
    private $price;

    /**
     * @var int
     *
     * @ORM\Column(name="false_price", type="integer", nullable=false)
     */
    private $falsePrice;

    /**
     * @var string
     *
     * @ORM\Column(name="picture", type="text", length=65535, nullable=false)
     */
    private $picture;

    /**
     * @var bool
     *
     * @ORM\Column(name="offer", type="boolean", nullable=false)
     */
    private $offer;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getName(): ?string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getPrice(): ?int
    {
        return $this->price;
    }

    public function setPrice(int $price): self
    {
        $this->price = $price;

        return $this;
    }

    public function getFalsePrice(): ?int
    {
        return $this->falsePrice;
    }

    public function setFalsePrice(int $falsePrice): self
    {
        $this->falsePrice = $falsePrice;

        return $this;
    }

    public function getPicture(): ?string
    {
        return $this->picture;
    }

    public function setPicture(string $picture): self
    {
        $this->picture = $picture;

        return $this;
    }

    public function getOffer(): ?bool
    {
        return $this->offer;
    }

    public function setOffer(bool $offer): self
    {
        $this->offer = $offer;

        return $this;
    }


}
