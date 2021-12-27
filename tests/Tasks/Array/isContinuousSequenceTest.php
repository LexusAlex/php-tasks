<?php

namespace Test\Tasks\Array;

use PHPUnit\Framework\TestCase;
use function Task\Tasks\Types\Array\isContinuousSequence;


class isContinuousSequenceTest extends TestCase
{
    public function testSequence()
    {
        self::assertTrue(isContinuousSequence([1,2,3,4]));
        self::assertFalse(isContinuousSequence([1,2,4]));
    }
}