<?php

namespace Test\Tasks\Html;

use PHPUnit\Framework\TestCase;

class SymbolsInEssenceTest extends TestCase
{
    /**
     * @dataProvider additionProvider
     */
    public function testCharts($a, $expected)
    {
        $this->assertSame($expected, htmlspecialchars($a, ENT_QUOTES));
        $this->assertSame($expected, htmlentities($a, ENT_QUOTES));
    }

    public function additionProvider(): array
    {
        return [
            ["<", "&lt;"],
            [">", "&gt;"],
            ["'", "&#039;"],
            ['"', "&quot;"],
            ['&', "&amp;"],
        ];
    }
}