<?php

namespace Task\Tasks\Types\Array;

function flatten($coll): array
{
    // эффективнее будет использовать функцию array_merge
    $result = [];
    foreach ($coll as $item) {
        if (is_array($item)) {
            foreach ($item as $sub) {
                $result[] = $sub;
            }
        } else {
            $result[] = $item;
        }
    }

    return $result;
}