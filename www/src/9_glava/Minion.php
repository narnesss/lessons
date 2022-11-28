<?php


namespace Root;


class Minion extends Employee
{
    public function fire(): void
    {
        print "{$this->name}: Почисти\n";
    }
}