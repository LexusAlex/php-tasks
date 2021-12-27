<?php

namespace Task\Tasks\Types\Array;

function arrayAverage1($array): float|int
{
    return empty($array) ? 0 : array_sum($array) / count($array);
}

function arrayAverage2($coll): float|int
{
    if (empty($coll)) {
        return 0;
    }

    $sum = 0;
    foreach ($coll as $item) {
        $sum += $item;
    }

    return $sum / count($coll);
}