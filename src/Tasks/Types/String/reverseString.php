<?php

namespace Task\Tasks\Types\String;

function reverseString($string): string
{
    $i = 0;
    $result = '';
    while ($i < strlen($string)) {
        $result = "{$string[$i]}{$result}";
        $i = $i + 1;
    }
    return $result;
}