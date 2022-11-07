<?php


use Root\Point;

if (file_exists($_SERVER["DOCUMENT_ROOT"] . "/vendor/autoload.php")) {
    require_once($_SERVER["DOCUMENT_ROOT"] . "/vendor/autoload.php");
}

$point = new Point();
$point->x = "a";