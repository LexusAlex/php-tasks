<?php

namespace Task\Tasks\Types\Array;

function getChunked(array $array, int $size): array
{
    $result = [];
    // Считаем размер массива и итерируемся по частям выбирая срез массива и запихивая в новый массив.
    // Идеально для пагинации
    for ($i = 0, $length = count($array); $i < $length; $i += $size) {
            $result[] = array_slice($array, $i, $size);
    }

    return $result;
}