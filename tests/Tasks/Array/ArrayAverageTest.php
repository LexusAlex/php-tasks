<?php

namespace Test\Tasks\Array;

use PHPUnit\Framework\TestCase;
use function Task\Tasks\Types\Array\arrayAverage1;
use function Task\Tasks\Types\Array\arrayAverage2;


class ArrayAverageTest extends TestCase
{
    public function testAverage()
    {
        self::assertEquals(2, arrayAverage1([1,2,3]));
        self::assertEquals(2, arrayAverage2([1,2,3]));
        self::assertEquals(9.25, arrayAverage1([6, 8, 14 ,9]));
        self::assertEquals(9.25, arrayAverage2([6, 8, 14 ,9]));
    }
}