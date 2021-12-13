<?php

namespace Test\Tasks\Construction;

use PHPUnit\Framework\TestCase;

class CycleTest extends TestCase
{
    public function testCycle()
    {
        $result = '';
        // while
        $i = 0;
        while ($i <= 10) {
            $result .= $i;
            $i = $i + 1;
        }

        $j = 10;
        while ($j >= 0) {
            $result .= $j;
            $j = $j - 1;
        }

        $this->assertEquals('012345678910109876543210', $result);
    }

}