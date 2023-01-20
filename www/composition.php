<?php

use Root\FixedCostStrategy;
use Root\Lecture;
use Root\Lesson;
use Root\Seminar;
use Root\TimedCostStrategy;

if (file_exists($_SERVER["DOCUMENT_ROOT"] . "/vendor/autoload.php")) {
    require_once($_SERVER["DOCUMENT_ROOT"] . "/vendor/autoload.php");
}

$lecture = new Lecture(5, Lesson::FIXED);
print "{$lecture->cost()} ({$lecture->chargeType()})\n";
$seminar = new Seminar(3, Lesson::TIMED);
print "{$seminar->cost()} ({$seminar->chargeType()})\n";

$lessons[] = new Seminar(4, new TimedCostStrategy());
$lessons[] = new Lecture(4, new FixedCostStrategy());
foreach ($lessons as $lesson) {
    print "Оплата за занятие {$lesson->cost()}. ";
    print "Тип оплаты: {$lesson->chargeType()}\n";
}