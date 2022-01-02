<?php

namespace Test\Tasks\Array;

use PHPUnit\Framework\TestCase;
use function Task\Tasks\Types\Array\flatten;


class FlattenTest extends TestCase
{
    public function testFlatArray()
    {
        self::assertCount(7, flatten([1, [2, 3], 4, [5, 6, 7]]));
    }
}