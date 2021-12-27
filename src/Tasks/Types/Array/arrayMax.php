<?php

namespace Task\Tasks\Types\Array;

function arrayMax($array)
{
    // поиск максимального значения в массиве
    if (empty($array)) {
        return null;
    }
    $max = $array[0];
    for ($i = 1; $i < sizeof($array); $i++) {
        // Если текущий элемент больше максимального,
        // то он становится максимальным
        if ($array[$i] > $max) {
            $max = $array[$i];
        }
    }

    return $max;
}