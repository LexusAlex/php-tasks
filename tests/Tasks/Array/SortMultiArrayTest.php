<?php

namespace Test\Tasks\Array;

use PHPUnit\Framework\TestCase;

class SortMultiArrayTest extends TestCase
{
    public function testSort()
    {
        $array = [
            ['course' => 90, 'position' => 100],
            ['course' => 4, 'position' => 300],
            ['course' => 6, 'position' => 56],
            ['course' => 2, 'position' => 789],
            ['course' => 1, 'position' => 10],
        ];
        // Обратите внимание функция usort возвращает не новый массив, а всего лишь статус выполнение операции
        usort($array, function ($a, $b){
            return ($a['course'] > $b['course']) ? 1 : 0;
        });

        self::assertEquals(1, $array[0]['course']);
    }
}