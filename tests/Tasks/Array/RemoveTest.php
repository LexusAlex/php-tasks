<?php

namespace Test\Tasks\Array;

use PHPUnit\Framework\TestCase;

class RemoveTest extends TestCase
{
    public function testRemoveNullElements()
    {
        $collection = [false, true, [], null, null, 'test'];
        foreach ($collection as $item => $value) {
            if (!is_null($value)) {
                $result[] = $value; // правильно создавать новый массив, а не модифицировать исходный, это пример фильтрации
            }
        }
        self::assertCount(4, $result);
    }
}
