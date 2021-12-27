<?php

namespace Test\Tasks\Array;

use PHPUnit\Framework\TestCase;
use function Task\Tasks\Types\Array\arrayMax;


class ArrayMaxTest extends TestCase
{
    public function testMaxValue()
    {
        self::assertEquals(10, arrayMax([5,7,7,8,10,1,4]));
        self::assertEquals(null, arrayMax([]));
        self::assertEquals(1, arrayMax([1,1,1,1]));
    }
}