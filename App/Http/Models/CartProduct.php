<?php

namespace App\Http\Models;

use App\Common\Sessions;

class CartProduct
{

    private int $id;

    private int $price;

    private int $quantity;

    private string $name;

    private string $description;

    private string $image;

    
    public function setId(int $id)
    {
        $this->id = $id;
    }

    public function setPrice(int $price)
    {
        $this->price = $price;
    }

    public function setQuantity(int $quantity)
    {
        $this->quantity = $quantity;
    }

    public function setName(string $name)
    {
        $this->name = $name;
    }

    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    public function setImage(string $image)
    {
        $this->image = $image;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getImage()
    {
        return $this->image;
    }

}