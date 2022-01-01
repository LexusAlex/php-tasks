<?php

namespace Test\Tasks\String;

use PHPUnit\Framework\TestCase;

class ProcessingStringTest extends TestCase
{
    public function testProcessingString()
    {
        // Разбить строку в массив посимвольно
        $words = explode(' ', 'many my string super str');
        $capitalizedWords = [];
        foreach ($words as $word) {
            $capitalizedWords[] = ucfirst($word);
        }

        self::assertEquals('Many My String Super Str', implode(' ', $capitalizedWords));
        // строка на русском
        $chars = mb_str_split('Строка на русском');
        // если нужна обработка строки
        $symbols = [];
        foreach ($chars as $char) {
            $symbols[] = $char;
        }

        self::assertEquals('м', $symbols[16]);

        $parts = mb_str_split('Строка на русском', 4);
        self::assertEquals('м', $parts[4]);

    }
}