<?php

namespace Test\Tasks\Array;

use PHPUnit\Framework\TestCase;
use function Task\Tasks\Types\Array\searchArrayRecursive;


class SearchArrayRecursiveTest extends TestCase
{
    public function testRecursive()
    {
        $data = ['one' => [
            '1.1' => ['wow' => [
                '123' => ['two' => ['777']]
            ]]
        ]];

        $path = explode(',', searchArrayRecursive('777', $data));

        self::assertEquals('777', $path[6]);
    }
}