<?php

use Root\CdProduct;
use Root\ClassInfo;

if (file_exists($_SERVER["DOCUMENT_ROOT"] . "/vendor/autoload.php")) {
    require_once($_SERVER["DOCUMENT_ROOT"] . "/vendor/autoload.php");
}

$prodclass = new \ReflectionClass(CdProduct::class);
print ClassInfo::getData($prodclass);