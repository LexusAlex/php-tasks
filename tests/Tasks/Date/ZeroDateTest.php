<?php

namespace Test\Tasks\Date;

use PHPUnit\Framework\TestCase;

class ZeroDateTest extends TestCase
{
    public function testZeroDate()
    {
        $this->assertEquals('04.01.1989', sprintf("%02d.%02d.%04d", 4, 01, 1989));
    }

}