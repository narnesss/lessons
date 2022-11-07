<?php


namespace Root;


interface PersonWriter
{
    public function write(Person $person): void;
}