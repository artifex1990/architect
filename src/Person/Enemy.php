<?php

namespace Person;

use Geo\IMovable;
use Geo\IPoint;

class Enemy implements IMovable
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

    public function getPoint(): IPoint
    {
        return $this->point;
    }
}