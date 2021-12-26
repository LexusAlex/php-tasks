<?php

namespace Test\Tasks\Array;

use PHPUnit\Framework\TestCase;

use function Task\Tasks\Types\Array\reverseArray;


class ReverseArrayTest extends TestCase
{
    public function testReverse()
    {
        $array = reverseArray([1,2,3,4]);
        self::assertEquals(4, $array[0]);
    }
}