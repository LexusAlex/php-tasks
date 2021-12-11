<?php

namespace Test\Tasks\Integer;

use PHPUnit\Framework\TestCase;

use function Task\Tasks\Types\Integer\isEven;

class IsEvenTest extends TestCase
{
    public function testIsEven()
    {
        self::assertTrue(isEven(2));
        self::assertFalse(isEven(3));
    }

}