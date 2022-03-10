<?php

namespace Test\Tasks\Array;

use PHPUnit\Framework\TestCase;

class WithoutTest extends TestCase
{
    public function testWithout()
    {
        self::assertEquals(1, array_values(array_diff(['one' => 1, 'two' => 2, 'three' => 3], [2,3]))[0]);
    }
}
