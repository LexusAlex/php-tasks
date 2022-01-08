<?php

namespace Test\Tasks\Array;

use PHPUnit\Framework\TestCase;
use function Task\Tasks\Types\Array\addEmail;


class ChangeEmailInArrayTest extends TestCase
{
    public function testChangeEmail()
    {
        $userData = [
            'id' => 42,
            'name' => 'Vasya',
            'emails' => [
                'vasya@examlpe.com'
            ]
        ];

        $newData = addEmail($userData, 'new@email.com');
        $newData2 = addEmail($newData, 'new@email2.com');

        self::assertArrayHasKey(2, $newData2['emails']);
    }
}