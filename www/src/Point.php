<?php


namespace Root;


class Point
{
    public $x = 0;
    public $y = 0;
    public function setVals(int $x, int $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    public function getX(): int
    {
        return $this->x;
    }
    public function getY(): int
    {
        return $this->y;
    }
}