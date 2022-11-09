<?php

use Root\ParamHandler;

if (file_exists($_SERVER["DOCUMENT_ROOT"] . "/vendor/autoload.php")) {
    require_once($_SERVER["DOCUMENT_ROOT"] . "/vendor/autoload.php");
}

function readParams(string $source): array
{
    $params = [];
    if (preg_match("/\.xml$/i", $source)) {

    } else {

    }
    return $params;
}

function writeParams(array $params, string $source): void
{
    if (preg_match("/\.xml$/i", $source)) {

    } else {

    }
}

$file = "/tmp/params.txt";
$params = [
    "key1" => "val1",
    "key2" => "val2",
    "key3" => "val3",
];
writeParams($params, $file);
$output = readParams($file);
print_r($output);

$test = ParamHandler::getInstance(__DIR__ . "/params.xml");
$test->addParam("key1", "val1");
$test->addParam("key2", "val2");
$test->addParam("key3", "val3");
$test->write();
$test = ParamHandler::getInstance(__DIR__ . "/params.txt");
$test->read();
$params = $test->getAllParams();
print_r($params);