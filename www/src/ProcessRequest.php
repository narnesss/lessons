<?php


namespace Root;


abstract class ProcessRequest
{
    abstract public function process(RequestHelper $req): void;
}