<?php

namespace Test\Tasks\String;

use PHPUnit\Framework\TestCase;

class GenerateStringInCircleTest extends TestCase
{
    public function testGenerate()
    {
        $collection = ['one', 'two', 'three', 'four'];

        $parts = [];

        foreach ($collection as $item) {
            $parts[] = "<li>{$item}</li>";
        }
        $innerValue = implode('', $parts);
        $result = "<ul>{$innerValue}</ul>";

        self::assertEquals('<ul><li>one</li><li>two</li><li>three</li><li>four</li></ul>', $result);

        // Собираем нужную нам строку
        ksort($collection);
        $result = [];
        foreach ($collection as $key => $value) {
            $result[] = "{$key}={$value}";
        }

        self::assertEquals('0=one&1=two&2=three&3=four', implode('&', $result));
    }
}