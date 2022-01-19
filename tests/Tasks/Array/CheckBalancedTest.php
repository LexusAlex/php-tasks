<?php

namespace Test\Tasks\Array;

use PHPUnit\Framework\TestCase;
use function Task\Tasks\Types\Array\checkBalanced;


class CheckBalancedTest extends TestCase
{
    public function testBalanced()
    {
        self::assertTrue(checkBalanced('[]'));
        self::assertTrue(checkBalanced('[{[([])]}]'));
        self::assertFalse(checkBalanced('[{[([])]}'));
        ;
    }
}