<?php

namespace Test\Tasks\Array;

use PHPUnit\Framework\TestCase;

class MapTest extends TestCase
{
    public function testMap()
    {
        $listeners = [
            ['name' => 'one listener', 'number' => 1, 'phones' => [1,2,3,4,5,6]],
            ['name' => 'two listener', 'number' => 2, 'phones' => [1,2,3,4,5,6]],
            ['name' => 'three listener', 'number' => 3, 'phones' => [1,2,3,4,5,6]],
            ['name' => 'four listener', 'number' => 4, 'phones' => [1,2,3,4,5,6]],
            ['name' => 'five listener', 'number' => 5, 'phones' => [1,2,3,4,5,6]]
        ];

        $map = array_map(function ($a){
            return $a['phones'][0];
        }, $listeners);

        self::assertEquals(5, array_sum($map));

        // как это реализовано внутри
        $result = [];
        $callback = function ($a) {return $a['phones'][1];};
        foreach ($listeners as $item) {
            $result[] = $callback($item);
        }

        self::assertEquals(10, array_sum($result));
    }
}