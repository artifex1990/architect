<?php

class Player implements IMovable
{
    private IPoint $point;

    public function __construct(IPoint $point)
    {
        $this->point = $point;
    }

    public function move(IPoint $point): void
    {
        $this->point = $point;
    }
}