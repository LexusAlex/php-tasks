<?php

namespace Test\Tasks\Array;

use PHPUnit\Framework\TestCase;

class RangeIpTest extends TestCase
{
    public function testIP()
    {
        $IPS = array_map('long2ip', range(ip2long('10.122.121.2'), ip2long('10.122.121.254')));
        self::assertCount(253, $IPS);
    }
}