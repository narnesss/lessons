<?php

namespace Root;


class CommsManager
{
    public const BLOGGS = 1;
    public const MEGA = 2;

    public function __construct(private int $mode)
    {
    }

    public function getApptEncoder(): ApptEncoder
    {
        switch ($this->mode) {
            case (self::MEGA):
                return new \Root\MegaApptEncoder();
            default:
                return new \Root\BloggsApptEncoder();
        }
    }

    public function getHeaderText(): string
    {
        switch ($this->mode) {
            case (self::MEGA):
                return "MegaCal header\n";
            default:
                return "BloggsCal header\n";
        }
    }
}