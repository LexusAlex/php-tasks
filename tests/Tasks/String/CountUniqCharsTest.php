<?php

namespace Test\Tasks\String;

use PHPUnit\Framework\TestCase;
use function Task\Tasks\Types\String\countUniqChars;

class CountUniqCharsTest extends TestCase
{
    public function testUniqChars()
    {
        self::assertEquals(3, countUniqChars('aAab'));
    }
}