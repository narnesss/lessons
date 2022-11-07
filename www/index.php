<?php


use Root\BookProduct;

if (file_exists($_SERVER["DOCUMENT_ROOT"] . "/vendor/autoload.php")) {
    require_once($_SERVER["DOCUMENT_ROOT"] . "/vendor/autoload.php");
}

$point = new BookProduct('test','test','test','100','10');
$point->getSummaryLine();