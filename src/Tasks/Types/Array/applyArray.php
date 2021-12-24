<?php

namespace Task\Tasks\Types\Integer;

function applyArray(array $arr, string $operationName, int $index = null, $value = null): array
{
    switch ($operationName) {
        case 'reset':
            $arr = [];
            break;
        case 'change':
            $arr[$index] = $value;
            break;
        case 'remove':
            unset($arr[$index]);
            break;
    }
    return $arr;
}