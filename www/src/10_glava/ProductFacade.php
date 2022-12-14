<?php


namespace Root;


class ProductFacade
{
    private array $products = [];

    public function __construct(private string $file)
    {
        $this->compile();
    }

    private function compile(): void
    {
        $lines = self::getProductFileLines($this->file);
        foreach ($lines as $line) {
            $id = self::getIDFromLine($line);
            $name = self::getNameFromLine($line);
            $this->products[$id] = self::getProductObjectFromID($id, $name);
        }
    }

    public function getProducts(): array
    {
        return $this->products;
    }

    public function getProduct(string $id): ?\Root\Product\Product
    {
        if (isset($this->products[$id])) {
            return $this->products[$id];
        }
        return null;
    }

    function getProductFileLines(string $file): array
    {
        return file($file);
    }

    function getProductObjectFromId(string $id, string $productname): Product
    {
        // some kind of database lookup
        return new Product($id, $productname);
    }

    function getNameFromLine(string $line): string
    {
        if (preg_match("/.*-(.*)\s\d+/", $line, $array)) {
            return str_replace('_', ' ', $array[1]);
        }
        return '';
    }

    function getIDFromLine($line): int|string
    {
        if (preg_match("/^(\d{1,3})-/", $line, $array)) {
            return $array[1];
        }
        return -1;
    }
}