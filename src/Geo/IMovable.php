<?php

namespace Geo;

interface IMovable
{
    function move(IPoint $point): void;
}