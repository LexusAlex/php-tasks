<?php

namespace Test\Tasks\String;

use PHPUnit\Framework\TestCase;

use function Task\Tasks\Types\String\reverseString;

class ReverseStringTest extends TestCase
{
    public function testReverseString()
    {
        self::assertEquals("gnirtStseTyM",reverseString('MyTestString'));
    }
}