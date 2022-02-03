<?php

namespace Test\Tasks\Construction;

use PHPUnit\Framework\TestCase;

class NullTest extends TestCase
{
    public function testNull()
    {
        self::assertEquals('test', null ?? 'test');
        self::assertEquals(true, true ?? 'test');
    }
}