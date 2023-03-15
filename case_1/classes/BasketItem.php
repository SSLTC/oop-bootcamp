<?php declare(strict_types=1);

class BasketItem 
{
    private string $name;
    private string $sort;
    private float $price;

    public function getName(): string 
    {
        return $this->name;
    }

    public function getSort(): string 
    {
        return $this->sort;
    }

    public function getPrice(): float 
    {
        return $this->price;
    }

    public function __construct(string $name, string $sort, float $price)
    {
        $this->name = $name;
        $this->sort = $sort;
        $this->price = $price;
    }
}