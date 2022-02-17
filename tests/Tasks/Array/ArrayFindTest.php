<?php

namespace Test\Tasks\Array;

use PHPUnit\Framework\TestCase;

class ArrayFindTest extends TestCase
{
    public function testFind()
    {
        $data = [
            ['title' => 'Book of Fooos', 'author' => 'FooBar', 'year' => 1111],
            ['title' => 'Cymbeline', 'author' => 'Shakespeare', 'year' => 1611],
            ['title' => 'The Tempest', 'author' => 'Shakespeare', 'year' => 1611],
            ['title' => 'Book of Foos Barrrs', 'author' => 'FooBar', 'year' => 2222],
            ['title' => 'Still foooing', 'author' => 'FooBar', 'year' => 3333],
            ['title' => 'Happy Foo', 'author' => 'FooBar', 'year' => 4444],
        ];

        $result = [];
        $where = ['year' => 2222];
        // С виду код очень простой, но не так просто до него додуматься
        foreach ($data as $item) {
            // типа нашли
            $find = true;
            foreach ($where as $key => $value) {
                // если не нашли то продолжаем крутить цикл
                if ($item[$key] !== $value) {
                    $find = false;
                }
            }
            if ($find) {
                $result = $item;
            }
        }

        self::assertEquals("Book of Foos Barrrs", $result['title']);
    }
}