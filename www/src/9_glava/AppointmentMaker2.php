<?php


namespace Root;


class AppointmentMaker2
{
    public function __contruct(private ApptEncoder $encoder)
    {
    }
    public function makeAppoinment(): string
    {
        return $this->encoder->encode();
    }
}