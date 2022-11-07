<?php

namespace Root;

require_once 'vendor/autoload.php';

$pop = 4;
switch ($pop) {
    case 0:
        $logger = function ($product) {
            print " logging ({$product->name})\n";
        };
        $processor = new ProcessSale();
        $processor->registerCallback($logger);
        $processor->sale(new Product("shoes", 6));
        print "\n";
        $processor->sale(new Product("coffee", 6));
        break;
    case 1:
        $logger = fn($product) => print " logging ({$product->name})\n";
        break;
    case 2:
        $processor = new ProcessSale();
        $processor->registerCallback([new Mailer(), "doMail"]);
        $processor->sale(new Product("shoes", 6));
        print "\n";
        $processor->sale(new Product("coffee", 6));
        break;
    case 3:
        $processor = new ProcessSale();
        $processor->registerCallback(Totalizer::warnAmount());
        $processor->sale(new Product("shoes", 6));
        print "\n";
        $processor->sale(new Product("coffee", 6));
        break;
    case 4:
        $processor = new ProcessSale();
        $processor->registerCallback(Totalizer2::warnAmount(8));
        $processor->sale(new Product("shoes", 6));
        print "\n";
        $processor->sale(new Product("coffee", 6));
        break;
    case 5:
        $markup = 3;
        $counter = fn(Product $product) => print "($product->name) marked up price: " . ($product->price + $markup) . "\n";
        $processor = new ProcessSale();
        $processor->registerCallback($counter);
        $processor->sale(new Product("shoes", 6));
        print "\n";
        $processor->sale(new Product("coffee", 6));
        break;
    case 6:
        $totalizer3 = new Totalizer3();
        $processor = new ProcessSale();
        $processor->registerCallback($totalizer3->warnAmount(8));
        $processor->sale(new Product("shoes", 6));
        print "\n";
        $processor->sale(new Product("coffee", 6));
        break;
    case 7:
        $person = new Person();
        $person->output(
            new class implements PersonWriter {
                public function write(Person $person): void
                {
                    print $person->getName() . " " . $person->getAge() . "\n";
                }
            }
        );
        break;
    case 8:
        $person = new Person();
        $person->output(
            new class ("/tmp/persondump") implements PersonWriter {
                private $path;

                public function __construct(string $path)
                {
                    $this->path = $path;
                }

                public function write(Person $person): void
                {
                    file_put_contents($this->path, $person->getName() . " " . $person->getAge() . "\n");
                }
            }
        );
}