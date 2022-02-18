<?php

namespace Test\Tasks\Construction;

use PHPUnit\Framework\TestCase;
use function PHPUnit\Framework\assertTrue;

class ClearFunctionTest extends TestCase
{
    public function testClear()
    {
        // Недетерминированная функция rand() и date()
        //rand();

        // Детерминированная функция print_r() - эта функция помимо печати на экран всегда возврщает true
        // А печать на экран это побочный эффект
        assertTrue(print_r(''));
    }
}