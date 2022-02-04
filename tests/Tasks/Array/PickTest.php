<?php

namespace Test\Tasks\Array;

use PHPUnit\Framework\TestCase;

class PickTest extends TestCase
{
    public function testPick()
    {
        $result = [];
        $data = ['test' => '1', 'test2' => '2'];
        $expectingKeys = ['test', 'notvalue', 'null'];
        foreach ($expectingKeys as $value) {
            // просто пробегаемся по всем ключам и если они есть в массиве с данными, то добавляем в итоговый массив
            if (array_key_exists($value, $data)) {
                $result[$value] = $data[$value];
            }
        }
        self::assertCount(1 , $result);
    }
}