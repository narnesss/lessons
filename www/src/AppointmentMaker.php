<?php


namespace Root;


class AppointmentMaker
{
public function makeAppointment(): string
{
    $encoder = new BloggsApptEncoder();
    return $encoder->encode();
}
}