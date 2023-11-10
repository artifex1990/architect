<?php

class Point2 implements IPoint
{
    private float $X;
    private float $Y;

    public function __construct(float $X, float $Y)
    {
        $this->X = $X;
        $this->Y = $Y;
    }

    public function getPoint(): Point2
    {
        return $this;
    }

    public function getX(): float
    {
        return $this->X;
    }

    public function getY(): float
    {
        return $this->Y;
    }

    public function setX(float $X)
    {
        $this->X = $X;
    }

    public function setY(float $Y)
    {
        $this->Y = $Y;
    }
}