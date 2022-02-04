<?php

namespace Task\Tasks\Types\Array;

function searchArrayRecursive($needle, $haystack): bool|string
{
    foreach ($haystack as $key => $value) {
        if(is_array($value)) {
            $return = searchArrayRecursive($needle, $value);
            if($return!= false) {
                return $key.','.$return;
            }
        } else {
            if($value == $needle) {
                return (string)$key.',' .$value;
            }
        }
    }
    return false;
}