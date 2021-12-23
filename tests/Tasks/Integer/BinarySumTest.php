<?php

namespace Test\Tasks\Integer;

use PHPUnit\Framework\TestCase;


class BinarySumTest extends TestCase
{
    public function testSum()
    {
        self::assertEquals('4', (bindec('0011') + bindec('001')));
    }

}