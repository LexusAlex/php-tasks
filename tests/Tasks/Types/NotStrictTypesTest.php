<?php

namespace Test\Tasks\Types;

use PHPUnit\Framework\TestCase;
use Task\Tasks\Types\NotStrictTypes;

class NotStrictTypesTest extends TestCase
{
    public function testNotStrictType()
    {
        $class = new NotStrictTypes();

        $class->setName(1234567890);

        self::assertIsString($class->getName());
    }
}