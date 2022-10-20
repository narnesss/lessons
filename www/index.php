<?php
namespace Root;

require_once 'vendor/autoload.php';


try {
    Runner::init();
} catch (\Exception $e) {
    throw new \Exception("The requested file does not exists.");
}