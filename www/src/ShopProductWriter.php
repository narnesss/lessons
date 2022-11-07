<?php


namespace Root;


class ShopProductWriter
{
    public function write($shopProduct): void
    {
        if (
            ! ($shopProduct instanceof CdProduct) &&
            ! ($shopProduct instanceof BookProduct)
        ) {
            die("wrong type supplied");
        }
        $str = "{$shopProduct->title}: "
            . $shopProduct->getProducer()
            . " ({$shopProduct->price})\n";
        print $str;
    }
}