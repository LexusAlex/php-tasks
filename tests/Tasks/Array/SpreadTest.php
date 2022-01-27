<?php

namespace Test\Tasks\Array;

use PHPUnit\Framework\TestCase;

class SpreadTest extends TestCase
{
    public function testSpread()
    {
        $array1 = ['one', 'two', 'three', ...['four', 'five']];
        $array2 = ['one', ...['two', 'three'], 'four', 'five'];
        $etalon = ['one', 'two', 'three', 'four', 'five'];

        self::assertEquals($etalon, $array1);
        self::assertEquals($etalon, $array2);
    }
}