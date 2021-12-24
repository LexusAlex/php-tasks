<?php

namespace Test\Tasks\Construction;

use PHPUnit\Framework\TestCase;

class CycleTest extends TestCase
{
    public function testCycle()
    {
        // Простая итерация
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

    public function testCycleFor()
    {
        // Сумма ряда целых чисел
        $start = 2;
        $finish = 6;
        $sum = 0;
        for ($i = $start; $i <= $finish; $i++) {
            $sum += $i;
        }
        // 2+3+4+5+6 = 20
        self::assertEquals(20, $sum);
    }

    public function testCycleArray()
    {
        // Итерация по массиву
        $array = ['alex1', 'alex2', 'alex3'];
        $result = '';
        for ($i = 0; $i < count($array); $i++) {
            $result .= "{$array[$i]}";
        }

        self::assertEquals('alex1alex2alex3', $result);
    }

}