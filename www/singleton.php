<?php

use Root\Preferences;


if (file_exists($_SERVER["DOCUMENT_ROOT"] . "/vendor/autoload.php")) {
    require_once($_SERVER["DOCUMENT_ROOT"] . "/vendor/autoload.php");
}

$pref = Preferences::getInstance();
$pref->setProperty("name", "Рома");
unset($pref); // remove the reference
$pref2 = Preferences::getInstance();
print $pref2->getProperty("name") . "\n";