<?php

namespace Task\Tasks\Types\Array;

function getTotalAmount(array $money, string $currency): int
{
    $sum = 0;

    foreach ($money as $bill) {
        $currentCurrency = substr($bill, 0, 3); // Текущая валюта
        if ($currentCurrency !== $currency) {
            continue; // если валюта не найдена, то продолжаем
        }
        $denomination = (int) substr($bill, 4);
        $sum += $denomination; // складываем
    }

    return $sum;
}