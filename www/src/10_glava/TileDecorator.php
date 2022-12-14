<?php


namespace Root;


class TileDecorator
{
    protected Tile $tile;

    public function construct(Tile $tile)
    {
        $this->tile = $tile;
    }
}