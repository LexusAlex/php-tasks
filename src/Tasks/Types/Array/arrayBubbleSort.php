<?php

namespace Task\Tasks\Types\Array;

function arrayBubbleSort($coll)
{
    $size = count($coll);
    do {
        $swapped = false;
        // Перебираем массив и меняем местами элементы, если предыдущий
        // больше, чем следующий
        for ($i = 0; $i < $size - 1; $i++) {
            if ($coll[$i] > $coll[$i + 1]) {
                // temp – временная переменная для хранения текущего элемента
                $temp = $coll[$i];
                $coll[$i] = $coll[$i + 1];
                $coll[$i + 1] = $temp;
                // Если сработал if и была совершена перестановка,
                // присваиваем swapped значение true
                $swapped = true;
            }
        }
        // Уменьшаем счетчик на 1, т.к. самый большой элемент уже находится
        // в конце массива
        $size--;
    } while ($swapped); // продолжаем, пока swapped === true

    return $coll;
}