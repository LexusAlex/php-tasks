<?php

namespace Test\Tasks\Array;

use PHPUnit\Framework\TestCase;


class GetChildrenTest extends TestCase
{
    public function testChildren()
    {
        $users = [
            ['name' => 'Tirion', 'children' => [
                ['name' => 'Mira', 'birdhday' => '1983-03-23']
            ]],
            ['name' => 'Bronn', 'children' => []],
            ['name' => 'Sam', 'children' => [
                ['name' => 'Aria', 'birdhday' => '2012-11-03'],
                ['name' => 'Keit', 'birdhday' => '1933-05-14']
            ]],
            ['name' => 'Rob', 'children' => [
                ['name' => 'Tisha', 'birdhday' => '2012-11-03']
            ]],
        ];

        $result = array_merge(...array_map(function ($item) {
            return array_values($item['children'] ?? []);
        }, $users));

        self::assertEquals("2012-11-03", $result[3]['birdhday']);
    }
}