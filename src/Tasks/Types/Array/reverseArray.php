<?php

namespace Task\Tasks\Types\Array;

function reverseArray($coll)
{
    // меняем зеркально элементы массива
    $size = count($coll);
    $maxIndex = floor($size / 2); // делим массив попалам округляя до ближайшего нижнего числа

    for ($i = 0; $i < $maxIndex; $i++) {
        $mirrorIndex = $size - $i - 1; // последний индекс массива
        $temp = $coll[$i];
        // меняем значения в массиве
        $coll[$i] = $coll[$mirrorIndex];
        $coll[$mirrorIndex] = $temp;
    }
    return $coll;
}