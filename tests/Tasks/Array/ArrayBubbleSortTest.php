<?php

namespace Test\Tasks\Array;

use PHPUnit\Framework\TestCase;
use function Task\Tasks\Types\Array\arrayBubbleSort;


class ArrayBubbleSortTest extends TestCase
{
    public function testBubbleSort()
    {
        self::assertEquals(5677, arrayBubbleSort([7,99,34,1,45,5677,2,14])[7]);
    }
}