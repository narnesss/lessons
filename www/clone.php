<?php

namespace Root;

require_once 'vendor/autoload.php';

$pop = 4;
switch ($pop) {
    case 0:
        $first = new CopyMe();
        $second = clone $first;
        break;
    case 1:
        $person = new Person("bob", 44);
        $person->setId(343);
        $person2 = clone $person;
        var_dump($person2);
        break;
    case 2:
        $person = new Person("bob", 44, new Account(200));
        $person->setId(343);
        $person2 = clone $person;
        $person->account->balance += 10;
        print $person2->account->balance;
        break;
    case 3:
        $st = new StringThing();
        print $st;
        break;
    case 4:
        $person = new Person();
        print $person;
        break;
}









