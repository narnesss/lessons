<?php


namespace Root;


abstract class Unit
{
    public function addUnit(Unit $unit): void
    {
        throw new UnitException(get_class($this) . " является листом");
    }

    public function removeUnit(Unit $unit): void
    {
        throw new UnitException(get_class($this) . " является листом");
    }

    abstract public function bombardStrenght(Unit $unit): int;
}