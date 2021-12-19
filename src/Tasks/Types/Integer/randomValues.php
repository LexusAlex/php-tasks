<?php

namespace Task\Tasks\Types\Integer;

function randomValues(int $countElements, int $countRandomValues): array
{
    /*
     * 1. Запускаем цикл и проходимся по элементам для которых нужно сгенерировать рандомные значения
     * 2. Запускаем второй цикл и итерируемся по количеству рандомных значений, при этом цикл будет срабатывать когда bufferArray пуст
     * 3. Выбираем рандомное значение из массива $bufferArray
     * 4. Присваиваем его массиву $result и удаляем его из буферного массива
     */

    $result = [];
    $bufferArray = [];

    for ($i = 1; $i <= $countElements; $i++)
    {
        if (count($bufferArray) == 0) {
            for ($j = 1; $j <= $countRandomValues; $j++) {
                $bufferArray[$j] = $j;
            }
        }
        $random_value = array_rand($bufferArray);

        $result[$i] = $bufferArray[$random_value];
        unset($bufferArray[$random_value]);
    }
    return $result;
}