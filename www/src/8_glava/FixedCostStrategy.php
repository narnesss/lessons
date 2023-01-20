<?php


namespace Root;


class FixedCostStrategy extends \Root\CostStrategy
{
    public function cost(Lesson $lesson): int
    {
        return 30;
    }

    public function chargeType(): string
    {
        return "Фиксированная ставка";
    }
}