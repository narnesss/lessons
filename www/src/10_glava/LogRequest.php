<?php


namespace Root;


class LogRequest extends DecorateProcess
{
    public function process(RequestHelper $req): void
    {
        print __CLASS__ . ": запрос\n";
        $this->processrequest->process($req);
    }
}