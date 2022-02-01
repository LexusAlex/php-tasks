<?php

namespace Test\Tasks\Array;

use PHPUnit\Framework\TestCase;
use function Task\Tasks\Types\Array\flatten;
use function Task\Tasks\Types\Array\getChunked;


class GetChunkedTest extends TestCase
{
    public function testChunkedArray()
    {
        $chunked = getChunked([1,2,3,4,5],2);
        self::assertEquals(5, $chunked[2][0]);

        // свернем в обратном порядке
        self::assertEmpty(array_diff(flatten($chunked),[1,2,3,4,5]));
    }
}