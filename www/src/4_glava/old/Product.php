<?php


namespace Root;


class Product
{
    public function __construct(public string $name, public float $price)
    {
    }
}