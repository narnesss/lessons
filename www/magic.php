<?php

namespace Root;

require_once 'vendor/autoload.php';

$pop = 0;
switch ($pop) {
    case 0:
        try {
            eval("illegal code");
        } catch (\Error $e) {
            print get_class($e) . "\n";
            print $e->getMessage();
        } catch (\Exception $e) {
            // do something with an Exception
        }
        break;
    case 1:
        $p = new Person();
        if (isset($p->name)) {
            print $p->name;
        }
        break;
    case 2:
        $p = new Person();
        $p->name = "bob";
        break;
    case 3:
        $address = new Address("441b Bakers Street");
        print_r($address);
        break;
    case 4:
        $person = new Person("bob", 44);
        $person->setId(343);
        unset($person);
        break;
}









