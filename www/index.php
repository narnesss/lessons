<?php


$pop = 2;
switch ($pop) {
    case 0:
        $base = __DIR__;
        $classname = "Task";
        $path = "{$base}/tasks/{$classname}.php";
        if (! file_exists($path)) {
            throw new \Exception("No such file as {$path}");
        }
        require_once($path);
        $qclassname = "tasks\\$classname";
        if (! class_exists($qclassname)) {
            throw new Exception("No such class as $qclassname");
        }
        $myObj = new $qclassname();
        $myObj->doSpeak();
        break;
    case 1:
        $product = self::getProduct();
        if ($product instanceof \popp\ch05\batch05\CdProduct) {
            print "\$product is an instance of CdProduct\n";
        }
        break;
    case 2:
        print u\Writer::class . "\n";
        print q::class . "\n";
        print Local::class . "\n";
        break;
    case 3:
        $bookp = new BookProduct(
            "Catch 22",
            "Joseph",
            "Heller",
            11.99,
            300
        );
        print $bookp::class;
        break;
    case 4:
        $product = self::getBookProduct(); // acquire an object
        if (is_subclass_of($product, '\\popp\\ch04\\batch02\\ShopProduct')) {
            print "BookProduct is a subclass of ShopProduct\n";
        }
        break;
}