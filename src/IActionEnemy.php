<?php

interface IActionEnemy
{
    function shoot(IEnemy $enemy);
    function hit();
}