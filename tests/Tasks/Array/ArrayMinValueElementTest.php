<?php

namespace Test\Tasks\Array;

use PHPUnit\Framework\TestCase;


class ArrayMinValueElementTest extends TestCase
{
    public function testMinValue()
    {
        $users = [
            ['name' => 'Tirion', 'friends' => [
                ['name' => 'Mira', 'gender' => 'female'],
                ['name' => 'Ramsey', 'gender' => 'male']
            ]],
            ['name' => 'Bronn', 'friends' => []],
            ['name' => 'Sam', 'friends' => [
                ['name' => 'Aria', 'gender' => 'female'],
                ['name' => 'Keit', 'gender' => 'female']
            ]],
            ['name' => 'Keit', 'friends' => []],
            ['name' => 'Rob', 'friends' => [
                ['name' => 'Taywin', 'gender' => 'male']
            ]],
        ];

        $values = array_map(function ($user) { return count($user['friends']);}, $users);
        $keys   = array_flip($values);

        $minValue = $users[$keys[min($values)]];

        self::assertEquals('Keit', $minValue['name']);
    }
}