<?php


$pop = 2;
switch ($pop) {
    case 0:
        spl_autoload_register();
        $writer = new Writer();
        break;
    case 1:
        $basic = function (string $classname) {
            $file = __DIR__ . "/" . "{$classname}.php";
            if (file_exists($file)) {
                require_once($file);
            }
        };
        \spl_autoload_register($basic);
        $blah = new Blah();
        $blah->wave();
        break;
    case 2:
        $person = new Person("bob", 44, new Account(200));
        $person->setId(343);
        $person2 = clone $person;
        $person->account->balance += 10;
        print $person2->account->balance;
        break;
    case 3:
        $underscores = function (string $classname) {
            $path = str_replace('_', DIRECTORY_SEPARATOR, $classname);
            $path = __DIR__ . "/$path";
            if (file_exists("{$path}.php")) {
                require_once("{$path}.php");
            }
        };
        \spl_autoload_register($underscores);
        $blah = new util_Blah();
        $blah->wave();
        break;
    case 4:
        $namespaces = function (string $path) {
            if (preg_match('/\\\\/', $path)) {
                $path = str_replace('\\', DIRECTORY_SEPARATOR, $path);
            }
            if (file_exists("{$path}.php")) {
                require_once("{$path}.php");
            }
        };
        \spl_autoload_register($namespaces);
        $obj = new util\LocalPath();
        $obj->wave();
        break;
    case 5:
        $underscores = function (string $classname) {
            $path = str_replace('_', DIRECTORY_SEPARATOR, $classname);
            $path = __DIR__ . "/$path";
            if (\stream_resolve_include_path("{$path}.php") !== false) {
                require_once("{$path}.php");
            }
        };

        $namespaces = function (string $path) {
            if (preg_match('/\\\\/', $path)) {
                $path = str_replace('\\', DIRECTORY_SEPARATOR, $path);
            }
            if (\stream_resolve_include_path("{$path}.php") !== false) {
                require_once("{$path}.php");
            }
        };
        \spl_autoload_register($namespaces);
        \spl_autoload_register($underscores);
        $blah = new util_Blah();
        $blah->wave();
        $obj = new util\LocalPath();
        $obj->wave();
        break;
    case 6:
        $classname = "Task";
        require_once("tasks/{$classname}.php");
        $classname = "tasks\\$classname";
        $myObj = new $classname();
        $myObj->doSpeak();
        break;
}