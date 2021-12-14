<?php

namespace Test\Tasks\String;

use PHPUnit\Framework\TestCase;

class EncodingTest extends TestCase
{
    public function testMbEncoding()
    {
        $strlen = strlen('А');
        $mb_strlen = mb_strlen('А');
        $symbols = mb_substr("Строка на русском языке", 10, 7);
        self::assertEquals(2, $strlen);
        self::assertEquals(1, $mb_strlen);
        self::assertEquals('русском', $symbols);


    }
}