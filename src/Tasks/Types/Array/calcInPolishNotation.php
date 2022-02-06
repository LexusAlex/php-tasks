<?php

namespace Task\Tasks\Types\Array;

function calcInPolishNotation(array $array)
{
    // инициализация стека
    $stack = [];
    // поддерживаемые операции
    $operators = ['*', '/', '+', '-'];

    $result = 0;
    foreach ($array as $value) {
        // если это число, кладем в стек
        if (!in_array($value, $operators)) {
            $stack[] = $value; // [1, 2]
            continue;
        }
        // вытаскиваем эти значения из стека
        $b = array_pop($stack);
        $a = array_pop($stack);
        // дальше должен идти знак
        // stack = [];
        // вычисляем первую операцию
        switch ($value) {
            case '*':
                $result = $a * $b;
                break;
            case '/':
                $result = $b === 0 ? null : $a / $b;
                break;
            case '+':
                $result = $a + $b;
                break;
            case '-':
                $result = $a - $b;
                break;
        }

        // если не вычисляется выходим
        if ($result === null) {
            return null;
        }

        $stack[] = $result; // 3
        // и тд, вычисляем пока не получим одно значение
    }

    return $stack[0];
}