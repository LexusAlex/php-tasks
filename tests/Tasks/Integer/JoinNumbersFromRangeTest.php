<?php

namespace Test\Tasks\Integer;

use PHPUnit\Framework\TestCase;

use function Task\Tasks\Types\Integer\joinNumbersFromRange;

class JoinNumbersFromRangeTest extends TestCase
{
    public function testJoinNumbersFromRange()
    {
        self::assertEquals("1234567",joinNumbersFromRange(1,7));
        self::assertEquals("1",joinNumbersFromRange(1,1));
        self::assertEquals("6789",joinNumbersFromRange(6,9));
    }
}