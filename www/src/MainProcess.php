<?php


namespace Root;


class MainProcess extends ProcessRequest
{
    public function process(RequestHelper $req): void
    {
        print __CLASS__ . ": что-то полезное\n";
    }
}