<?php
namespace Root;

require_once 'vendor/autoload.php';

$file = '/tmp/test.txt';
$pop = 0; //значение переменной
switch ($pop) {
    case 0:
        try {
            Runner::init();
        } catch (\Exception $e) {
            throw new \Exception("The requested file does not exists.");
        }
        break;
    case 1:
        if (! file_exists($file)) {
            throw new \Exception("file '{$file}' does not exist");
        }
        $this->xml = simplexml_load_file($file);
        break;
    case 2:
        try {
            $conf = new Conf("nonexistent/not_there.xml");
        } catch (\Exception $e) {
            throw $e;
        }
        break;
    case 3:
        try {
            $conf = new Conf("/tmp/conf01.xml");
            print "user: " . $conf->get('user') . "\n";
            print "host: " . $conf->get('host') . "\n";
            $conf->set("pass", "newpass");
            $conf->write();
        } catch (\Exception $e) {
            throw new \Exception("Conf error: " . $e->getMessage());
        }
        break;
    case 4:
        try {
            eval(`illegal code`);
        } catch (\Error $e) {
            print get_class($e) . "\n";
            print $e->getMessage();
        } catch (\Exception $e) {
            echo 'do something with an Exception';
        }
        break;
}
