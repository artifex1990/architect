<?php

class Bullet implements IMissile, IMovable
{
    private IPoint $point;

    public function __construct(IPoint $point)
    {
        $this->point = $point;
    }

    public function move(IPoint $point)
    {
        $this->point = $point;
    }
}