<?php

class Enemy implements IMovable, IEnemy
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

    public function getPoint(): IPoint
    {
        return $this->point;
    }
}