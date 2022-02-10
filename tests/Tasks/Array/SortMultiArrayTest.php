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

    public function testMultiSort()
    {
        $products = [
            ['value1' => 2, 'value2' => '1', 'value3' => '8'],
            ['value1' => 1, 'value2' => '1', 'value3' => '100'],
            ['value1' => 1, 'value2' => '5', 'value3' => '1'],
            ['value1' => 2, 'value2' => '3', 'value3' => '10'],
            ['value1' => 1, 'value2' => '2', 'value3' => '50'],
            ['value1' => 1, 'value2' => '7', 'value3' => '75'],
        ];

        // Более универсальная функция сортировки по нескольким полям
        $sorts = array('value1' => 'asc', 'value2' => 'asc', 'value3' => 'asc');

        usort($products, function($a, $b) use ($sorts) {
        foreach($sorts as $field => $direction) {
            if ($a[$field] != $b[$field]) {
                if ($direction == 'asc') {
                    return $a[$field] < $b[$field] ? -1 : 1;
                }
                return $a[$field] < $b[$field] ? 1 : -1;
            }
        }
        return 0;
    });

        self::assertEquals(10, $products[5]['value3']);
    }
}