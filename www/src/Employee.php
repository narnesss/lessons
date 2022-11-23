<?php


namespace Root;


abstract class Employee
{
    public function __construct(protected string $name)
    {

    }

    abstract public function fire(): void;
}