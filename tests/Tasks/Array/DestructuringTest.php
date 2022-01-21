<?php

namespace Test\Tasks\Array;

use PHPUnit\Framework\TestCase;

class DestructuringTest extends TestCase
{
    public function testDest()
    {
        $elements = [1,2,3,4,5];

        [$one, $two, $three, $four, $five] = $elements;

        self::assertEquals(1, $one);
        self::assertEquals(2, $two);
        self::assertEquals(3, $three);
        self::assertEquals(4, $four);
        self::assertEquals(5, $five);

        $listeners = [
            ['one listener', 1],
            ['two listener', 2],
            ['three listener', 3],
            ['four listener', 4],
            ['five listener', 5]
        ];

        // деструкутуризация работает вот так
        $res = [];
        foreach ($listeners as [$x, $y]) {
            $res[] = [$x, $y];
        }
    }
}