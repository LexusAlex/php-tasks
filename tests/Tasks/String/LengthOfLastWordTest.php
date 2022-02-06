<?php

namespace Test\Tasks\String;

use PHPUnit\Framework\TestCase;

class LengthOfLastWordTest extends TestCase
{
    public function testLength()
    {
        $words = explode(' ', trim('many many words  '));
        self::assertEquals(5, strlen($words[count($words) - 1]));

        // другой вариант
        //$w = explode(' ', $words);
        //($words === '') ? 0 : strlen($w[count((array_diff($w, ['']))) - 1]);
    }
}