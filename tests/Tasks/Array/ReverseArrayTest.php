<?php

namespace Test\Tasks\Array;

use PHPUnit\Framework\TestCase;

use function Task\Tasks\Types\Array\reverseArray;


class ReverseArrayTest extends TestCase
{
    public function testReverse()
    {
        $array = reverseArray(['one','two','three','four','five']);
        self::assertEquals('five', $array[0]);
    }
}