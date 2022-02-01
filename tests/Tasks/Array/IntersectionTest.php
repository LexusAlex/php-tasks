<?php

namespace Test\Tasks\Array;

use PHPUnit\Framework\TestCase;

class IntersectionTest extends TestCase
{
    public function testIntersection()
    {
        $result = [];
        foreach ([1,5,6,7,8,9] as $value) {
            if (in_array($value, [2,3,4,5,6])) {
                $result[] = $value;
            }
        }

        self::assertEquals([5,6], $result);

    }
}