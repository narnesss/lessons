<?php


namespace Root;


class PollutedPlains
{
    public function getWealthFactor(): int
    {
        return parent::getWealthFactor() - 4;
    }
}