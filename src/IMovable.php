<?php

namespace Odno;

interface IMovable
{
    function move(IPoint $point): void;
}