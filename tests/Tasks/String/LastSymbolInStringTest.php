<?php

namespace Test\Tasks\String;

use PHPUnit\Framework\TestCase;

class LastSymbolInStringTest extends TestCase
{
    public function testLastSymbol()
    {
        $last = function($text){
            return ($text === '') ? null : $text[strlen($text)-1];
        };

        self::assertEquals('i', $last('123 yui'));
    }
}