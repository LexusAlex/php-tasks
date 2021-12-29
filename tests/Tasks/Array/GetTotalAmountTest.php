<?php

namespace Test\Tasks\Array;

use PHPUnit\Framework\TestCase;
use function Task\Tasks\Types\Array\getTotalAmount;


class GetTotalAmountTest extends TestCase
{
    public function testAmount()
    {
        $money = ['eur 10', 'rub 50', 'eur 5', 'rub 10', 'rub 10', 'eur 100', 'rub 200'];
        self::assertEquals(270, getTotalAmount($money, 'rub'));

    }
}