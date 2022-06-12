<?php

namespace App\Entity;

use App\Repository\PRODUCTRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PRODUCTRepository::class)]
class PRODUCT
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;


    #[ORM\Column(type: 'string', length: 25)]
    private $name_product;

    #[ORM\Column(type: 'text', nullable: true)]
    private $desc_product;

    #[ORM\Column(type: 'string', length: 25)]
    private $category_product;

    #[ORM\Column(type: 'string', length: 25)]
    private $type_product;

    #[ORM\Column(type: 'float')]
    private $price_product;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNameProduct(): ?string
    {
        return $this->name_product;
    }

    public function setNameProduct(string $name_product): self
    {
        $this->name_product = $name_product;

        return $this;
    }

    public function getDescProduct(): ?string
    {
        return $this->desc_product;
    }

    public function setDescProduct(?string $desc_product): self
    {
        $this->desc_product = $desc_product;

        return $this;
    }

    public function getCategoryProduct(): ?string
    {
        return $this->category_product;
    }

    public function setCategoryProduct(string $category_product): self
    {
        $this->category_product = $category_product;

        return $this;
    }

    public function getTypeProduct(): ?string
    {
        return $this->type_product;
    }

    public function setTypeProduct(string $type_product): self
    {
        $this->type_product = $type_product;

        return $this;
    }

    public function getPriceProduct(): ?float
    {
        return $this->price_product;
    }

    public function setPriceProduct(float $price_product): self
    {
        $this->price_product = $price_product;

        return $this;
    }
}
