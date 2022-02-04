<?php

namespace Test\Tasks\Array;

use PHPUnit\Framework\TestCase;


class GetInTest extends TestCase
{
    public function testGetIn()
    {
        $data = ['one' => [
            '1.1' => ['wow']
        ]];
        $keys = ['one', '1.1', 0];

        $current = $data;
        foreach ($keys as $key) {
            if (!is_array($current) || !array_key_exists($key, $current)) {
                return null;
            }
            // Теперь происходит некое уточнение значения, и с каждой новой итерацией идем вглубь
            $current = $current[$key];
        }
        self::assertEquals('wow', $current);
    }
}