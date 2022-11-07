<?php


namespace Root;


class ShopProduct
{
    public $discount = 0;
    public $title;
    public $producerMainName;
    public $producerFirstName;
    public $price;

    public function __construct(
        $title,
        $firstName,
        $mainName,
        $price,
        $num
    )
    {
        $this->title = $title;
        $this->producerFirstName = $firstName;
        $this->producerMainName = $mainName;
        $this->price = $price;
        $this->discount = $num;
    }

    public function getProducer(): string
    {
        return $this->producerFirstName . " " . $this->producerMainName;
    }

    public function getSummaryLine(): string
    {
        $base = "{$this->title} ( {$this->producerMainName}, ";
        $base .= "{$this->producerFirstName} )";
        return $base;
    }
    public function setDiscount(int $num): void
    {
        $this->discount = $num;
    }
    public function getPrice(): int|float
    {
        return ($this->price - $this->discount);
    }
}