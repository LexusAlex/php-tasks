<?php

namespace Test\Tasks\Array;

use PHPUnit\Framework\TestCase;

class UniqueElementsTest extends TestCase
{
    public function testCommonUnique()
    {
        $count = 0;
        $uniqColl1 = array_unique([1,2,3,4]);
        $uniqColl2 = array_unique([5,6,7,4,1]);
        foreach ($uniqColl1 as $item1) {
            foreach ($uniqColl2 as $item2) {
                if ($item1 === $item2) {
                    $count++;
                }
            }
        }

        self::assertEquals(2, $count);
    }
}
