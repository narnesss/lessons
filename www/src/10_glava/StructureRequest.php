<?php


namespace Root;


class StructureRequest extends DecorateProcess
{
    public function process(RequestHelper $req): void
    {
        print __CLASS__ . ": реквест\n";
        $this->processrequest->process($req);
    }
}