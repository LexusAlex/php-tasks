<?php

namespace Test\Tasks\Array;

use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertEquals;
use function Task\Tasks\Types\Integer\applyArray;


class ApplyArrayTest extends TestCase
{
    public function testApplyArray()
    {
        self::assertEmpty(applyArray(['test', 'test2'], 'reset'));
        $array = applyArray(['1', '2', '3'], 'change',1,'changeValue');
        assertEquals($array[1], 'changeValue');
        self::assertNotContains('changeValue', applyArray($array, 'remove',1));
    }
}