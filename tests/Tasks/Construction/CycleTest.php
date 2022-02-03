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
        // Итерация по массиву - прямой порядок
        $array = ['alex1', 'alex2', 'alex3'];
        $result = '';
        for ($i = 0; $i < count($array); $i++) {
            $result .= "{$array[$i]}";
        }

        self::assertEquals('alex1alex2alex3', $result);

        $test = '';
        // Итерация по массиву - обратный порядок
        for ($i = count($array) - 1; $i >= 0; $i--) {
            $test .="{$array[$i]}";
        }

        self::assertEquals('alex3alex2alex1', $test);

        $names = ['est1', 'est2', 'est3'];
        $prefix = 't';
        $result = [];
        for ($i = 0, $length = count($names); $i < $length; $i++) {
            $result[$i] = "{$prefix}{$names[$i]}";
        }

        self::assertEquals('test1,test2,test3', implode(',',$result));
    }

    public function testCycleForeach()
    {
        $result = '';
        foreach (['one' => 1, 'two' => 2, 'three' => 3] as $key => $value) {
            $result .= "{$key} : {$value} ";
        }

        self::assertEquals('one : 1 two : 2 three : 3 ', $result);
    }

}