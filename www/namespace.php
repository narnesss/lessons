<?php

namespace Root\popp\ch05\batch04;
namespace Root\com\getinstance\util;
{
    class Debug
    {
        public static function helloWorld(): void
        {
            print "Привет от Debug\n";
        }
    }
}
namespace Root\other;
{
    \Root\com\getinstance\util\Debug::helloWorld();
}
require_once 'vendor/autoload.php';

use Root\popp\ch05\batch04\util\Debug;
use Root\popp\ch05\batch04\util\TreeLister;
use Root\popp\ch05\batch04\Debug as CoreDebug;

Debug::helloWorld();
TreeLister::helloWorld();
\TreeLister::helloWorld();








