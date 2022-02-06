<?php

namespace Test\Tasks\Array;

use PHPUnit\Framework\TestCase;
use function Task\Tasks\Types\Array\calcInPolishNotation;


class CalcInPolishNotationTest extends TestCase
{
    public function testCalc()
    {
        self::assertEquals(15, calcInPolishNotation([1, 2, '+', 4, '*', 3, '+']));
        self::assertEquals(3, calcInPolishNotation([15, 5, '/']));
        self::assertEquals(9, calcInPolishNotation([1, 5, 3, '+', '+']));
    }
}