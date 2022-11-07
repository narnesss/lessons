<?php


namespace Root;


class BookProduct extends ShopProduct
{
    public $numPages;

    public function __construct(
        string $title,
        string $firstName,
        string $mainName,
        float $price,
        int $numPages
    )
    {
        parent:: __construct(
            $title,
            $firstName,
            $mainName,
            $price,
            $numPages
        );
        $this->numPages = $numPages;
    }

    public function getNumberOfPages(): int
    {
        return $this->numPages;
    }

    public function getPrice(): int|float
    {
        return $this->price;
    }

    public function getSummaryLine(): string
    {
        $base = "{$this->title} ( $this->producerMainName, ";
        $base .= "$this->producerFirstName )";
        $base .= ": page count - {$this->numPages}";
        return $base;
    }
}