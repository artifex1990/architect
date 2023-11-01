<?php

require __DIR__ . '/../vendor/autoload.php';

use Odno\Point2;
use Odno\Enemy;

//var_dump(new Point2(10, 15));
var_dump(new Point2(10, 15));
die(1);
$enemy = new Enemy(new Point2(10, 15));
var_dump($enemy->getPoint());