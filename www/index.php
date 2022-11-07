<?php

use Root\ShopProduct;

if (file_exists($_SERVER["DOCUMENT_ROOT"] . "/vendor/autoload.php")) {
    require_once($_SERVER["DOCUMENT_ROOT"] . "/vendor/autoload.php");
}

$product1 = new ShopProduct(
    "Exile on Coldharbour Lane",
    "The",
    "Alabama 3",
    10.99,
    60.33
);
print "The price is {$product1->price}\n";