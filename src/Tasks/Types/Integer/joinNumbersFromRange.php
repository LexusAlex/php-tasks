<?php

namespace Task\Tasks\Types\Integer;

function joinNumbersFromRange($startNumber, $endNumber): string
{
    $result = '';

    while ($startNumber <= $endNumber) {
        $result = "{$result}{$startNumber}";
        $startNumber = $startNumber + 1;
    }

    return $result;
}