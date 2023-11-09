<?php

use PHPUnit\Framework\TestCase;

class StackTest extends TestCase
{
    public function testPushAndPop()
    {
        $point = new Point2(12, 12);

        $this->assertSame(12, $point->getX());
    }
}