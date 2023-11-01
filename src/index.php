<?php

require __DIR__ . '/../vendor/autoload.php'; 

use Person\Enemy;
use Geo\Point2;

//var_dump(new Point2(10, 15));
var_dump(new Point2(10, 15));
die(1);
$enemy = new Enemy(new Point2(10, 15));
var_dump($enemy->getPoint());