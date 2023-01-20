<?php


namespace Root;


abstract class Lesson
{
    public const FIXED = 1;
    public const TIMED = 2;

    public function __construct(private int $duration, private CostStrategy $costStrategy)
    {
    }
//    public function cost(): int
//    {
//        switch ($this->costtype) {
//            case self::TIMED:
//                return (5 * $this->duration);
//                break;
//            case self::FIXED:
//                return 30;
//                break;
//            default:
//                $this->costtype = self::FIXED;
//                return 30;
//        }
//    }
    public function cost(): int
    {
        return $this->costStrategy->cost($this);
    }
//    public function chargeType(): string
//    {
//        switch ($this->costtype) {
//            case self::TIMED:
//                return "hourly rate";
//                break;
//            case self::FIXED:
//                return "fixed rate";
//                break;
//            default:
//                $this->costtype = self::FIXED;
//                return "fixed rate";
//        }
//    }
    public function chargeType(): string
    {
        return $this->costStrategy->chargeType();
    }

    public function getDuration(): int
    {
        return $this->duration;
    }
}