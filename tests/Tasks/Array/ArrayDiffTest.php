<?php

namespace Test\Tasks\Array;

use PHPUnit\Framework\TestCase;

class ArrayDiffTest extends TestCase
{
    public function testDiff()
    {

        $data1 = ['one' => '1', 'two' => 2];
        $data2 = ['two' => 2, 'three' => 3];
            $keys = array_merge(array_keys($data1), array_keys($data2)); // https://youtu.be/vkUTX1hruF8?t=929
            $result = [];
            foreach ($keys as $key) {
                // https://ru.hexlet.io/courses/php-associative-arrays/lessons/syntax/theory_unit
                if (!array_key_exists($key, $data1)) {
                    $result[$key] = 'added';
                } elseif (!array_key_exists($key, $data2)) {
                    $result[$key] = 'deleted';
                } elseif ($data1[$key] !== $data2[$key]) {
                    $result[$key] = 'changed';
                } else {
                    $result[$key] = 'unchanged';
                }
            }

            self::assertEquals('added', $result['three']);
    }
}