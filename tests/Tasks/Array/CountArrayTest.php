<?php

namespace Test\Tasks\Array;

use PHPUnit\Framework\TestCase;

class CountArrayTest extends TestCase
{
    public function testCount()
    {
        $text = [
            'gmail.com', 'yandex.ru', 'hotmail.com'
        ];

        $emails = [
            'info@gmail.com',
            'info@yandex.ru',
            'info@hotmail.com',
            'mk@host.com',
            'support@hexlet.io',
            'key@yandex.ru',
            'sergey@gmail.com',
            'vovan@gmail.com',
            'vovan@hotmail.com'
        ];
        // как это решал я

        $domains = [];

        foreach($emails as $email) {
            $d = explode('@', $email)[1];

            if (in_array($d, $text))
            {
                $domains[$d][] = $d;
            }
        }

        foreach ($domains as $key => $domain) {
            $domains[$key] = count($domain);
        }

        self::assertCount(3, $domains);

        // как это решают правильно

        $dom = array_map(fn($email) => explode('@', $email)[1], $emails);

        $freeDomains = array_filter(
            $dom,
            fn($dom) => in_array($dom, $text)
        );

        $r2 = array_reduce($freeDomains, function ($acc, $dom) {
            $acc[$dom] = ($acc[$dom] ?? 0) + 1;
            return $acc;
        }, []);

        self::assertCount(3, $r2);
    }
}