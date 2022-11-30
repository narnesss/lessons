<?php

use Root\CommsManager;


if (file_exists($_SERVER["DOCUMENT_ROOT"] . "/vendor/autoload.php")) {
    require_once($_SERVER["DOCUMENT_ROOT"] . "/vendor/autoload.php");
}

$factory = new \Root\TerrainFactory(new \Root\EarthSea(), new \Root\EarthPlains(), new \Root\EarthForest());
print_r($factory->getSea());
print_r($factory->getPlains());
print_r($factory->getForest());