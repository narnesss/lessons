<?php
if(file_exists($_SERVER["DOCUMENT_ROOT"]."/vendor/autoload.php")) {
    require_once($_SERVER["DOCUMENT_ROOT"]."/vendor/autoload.php");
}
$prodclass = new \ReflectionClass(\Root\Blah::class);
print $prodclass;