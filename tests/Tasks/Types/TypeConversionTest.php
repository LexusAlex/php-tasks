<?php

namespace Test\Tasks\Types;

use PHPUnit\Framework\TestCase;

class TypeConversionTest extends TestCase
{
    /**
     * @dataProvider examples
     */
    public function testConversionTypes($expected, $result)
    {
        $this->assertEquals($expected, $result);
    }


    public function examples()
    {
        return [
            [(1 + '7'), 8],
            [true + true + true, 3],
            ['0.7' + '0.7', 1.4],
            ['123' + 4, 127]
        ];
    }
}