<?php

namespace Test\Tasks\Integer;

use PHPUnit\Framework\TestCase;

use function Task\Tasks\Types\Integer\randomValues;

class RandomValuesTest extends TestCase
{
    public function testIsResult()
    {
        self::assertCount(9, array_unique(randomValues(10, 9)));

        $randomArray = randomValues(3, 3);
        $key = array_search(2, $randomArray);
        self::assertEquals(2, $randomArray[$key]);
    }

}