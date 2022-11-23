<?php


namespace Root;


class CluedUp extends Employee
{
    public function fire(): void
    {
        print "{$this->name}: Я тут закон\n";
    }
}