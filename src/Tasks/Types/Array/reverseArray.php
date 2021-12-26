<?php

namespace Task\Tasks\Types\Array;

function reverseArray($coll)
{
    $size = count($coll);
    $maxIndex = floor($size / 2);
    for ($i = 0; $i < $maxIndex; $i++) {
        $mirrorIndex = $size - $i - 1;
        $temp = $coll[$i];
        $coll[$i] = $coll[$mirrorIndex];
        $coll[$mirrorIndex] = $temp;
    }

    return $coll;
}