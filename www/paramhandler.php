<?php

use Root;
use Root\BookProduct;
use Root\CdProduct;
use Root\ParamHandler;
use Root\ShopProduct;
use Root\TextParamHandler;

if (file_exists($_SERVER["DOCUMENT_ROOT"] . "/vendor/autoload.php")) {
    require_once($_SERVER["DOCUMENT_ROOT"] . "/vendor/autoload.php");
}

function getSummaryLine(): string
{
    $base = "{$this->title} ( {$this->producerMainName}, ";
    $base .= "{$this->producerFirstName} )";
    if ($this->type == 'book') {
        $base .= ": page count - {$this->numPages}";
    } elseif ($this->type == 'cd') {
        $base .= ": playing time - {$this->playLength}";
    }
    return $base;
}
function readParams(string $source): array
{
    $params = [];
    if (preg_match("/\.xml$/i", $source)) {
        // read XML parameters from $source
    } else {
        // read text parameters from $source
    }
    return $params;
}
function writeParams(array $params, string $source): void
{
    if (preg_match("/\.xml$/i", $source)) {
        // write XML parameters to $source
    } else {
        // write text parameters to $source
    }
}
function workWithProducts(ShopProduct $prod)
{
    if ($prod instanceof CdProduct) {
        // do cd thing
    } elseif ($prod instanceof BookProduct) {
        // do book thing
    }
}
$test = ParamHandler::getInstance($file);
$test->read(); // could be XmlParamHandler::read() or
TextParamHandler::read();
$test->addParam("newkey1", "newval1");
$test->write(); // could be XmlParamHandler::write() or
TextParamHandler::write();