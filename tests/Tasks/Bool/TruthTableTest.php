<?php

// Проверка таблицы истинности
/*
 И &&
A 	      B 	A && B
TRUE 	TRUE 	TRUE
TRUE 	FALSE 	FALSE
FALSE 	TRUE 	FALSE
FALSE 	FALSE 	FALSE
ИЛИ ||
A 	     B 	    A ‖ B
TRUE 	TRUE 	TRUE
TRUE 	FALSE 	TRUE
FALSE 	TRUE 	TRUE
FALSE 	FALSE 	FALSE
 */

namespace Test\Tasks\Bool;

use PHPUnit\Framework\TestCase;

class TruthTableTest extends TestCase
{
    /**
     * @dataProvider examples
     */
    public function testCheckTruth($result, $expected)
    {
        $this->assertEquals($result, $expected);
    }

    public function examples()
    {
        return [
            [true, (1 && 1)],
            [false, (1 && 0)],
            [false, (0 && 1)],
            [false, (0 && 0)],
            [true, (1 || 1)],
            [true, (1 || 0)],
            [true, (0 || 1)],
            [false, (0 || 0)],
        ];
    }

}