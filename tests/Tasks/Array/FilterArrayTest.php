<?php

namespace Test\Tasks\Array;

use PHPUnit\Framework\TestCase;

class FilterArrayTest extends TestCase
{
    public function testFilter()
    {
        $users = [
            ['user' => 'alex', 'age' => 2, 'type' => 1],
            ['user' => 'bob', 'age' => 5, 'type' => 2],
            ['user' => 'crown', 'age' => 8, 'type' => 3],
            ['user' => 'petr', 'age' => 8, 'type' => 3],
            ['user' => 'vanya', 'age' => 10, 'type' => 4],
        ];

        $filterArray = array_filter($users, function ($user){
            return ($user['age'] >= 5 && $user['type'] == 3);
        });

        self::assertCount(2, $filterArray);
    }
}