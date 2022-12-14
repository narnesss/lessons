<?php


namespace Root;


class Archer
{
    public function addUnit(Unit $unit): void
    {
        throw new UnitException(get_class($this) . "является листом");
    }

    public function removeUnit(Unit $unit): void
    {
        throw new UnitException(get_class($this) . "является листом");
    }

    public function bombardStrenght(Unit $unit): int
    {
        return 4;
    }
}