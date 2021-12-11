<?php

namespace Task\Tasks\Types\Integer;

function isEven($number): bool
{
    return ($number % 2 === 0);
}