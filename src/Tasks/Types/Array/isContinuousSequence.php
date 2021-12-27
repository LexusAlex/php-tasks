<?php

namespace Task\Tasks\Types\Array;

function isContinuousSequence($sequences): bool
{
    $length = count($sequences);
    if ($length < 2) {
        return false;
    }

    for ($i = 1, $current = $sequences[0]; $i < $length; $i++) {
        if ($sequences[$i] !== $current + 1) {
            return false;
        }
        $current = $sequences[$i];
    }
    return true;
}