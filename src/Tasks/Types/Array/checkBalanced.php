<?php

namespace Task\Tasks\Types\Array;

function checkBalanced(string $expression): bool
{
    // Инициализируем стек
    $stack = [];
    // Инициализируем список открывающих элементов
    $startSymbols = ['{', '(', '<', '['];
    // Инициализируем список пар.
    $pairs = ['{}', '()', '<>', '[]'];

    // Проходимся по строке от первого до последнего символа
    for ($i = 0; $i < strlen($expression); $i++) {
        $curr = $expression[$i];
        // Если текущий символ находится в списке открывающих символов, то заносим его в стек
        if (in_array($curr, $startSymbols)) {
            array_push($stack, $curr);
        } else { // Если элемент не входит в список открывающих, значит считаем что это закрывающий символ
            $prev = array_pop($stack);
            // Составляем из этих символов пару
            $pair = "{$prev}{$curr}";
            // Проверяем, что она входит в список $pairs. Если входит, то все правильно, двигаемся дальше; если нет,
            // то это автоматически означает, что символы не сбалансированы
            if (!in_array($pair, $pairs)) {
                return false;
            }
        }
    }

    // Если стек оказался пустой после обхода строки, то значит все хорошо
    return count($stack) === 0;
}

// Вторая версия функции для но только для круглых скобок

/*function checkIfBalanced($expression)
{
    $openSymbol = '(';
    $closeSymbol = ')';
    $stack = [];
    for ($i = 0, $length = strlen($expression); $i < $length; $i++) {
        if ($expression[$i] === $openSymbol) {
            array_push($stack, $expression[$i]);
        } elseif ($expression[$i] === $closeSymbol) {
            if (empty($stack)) {
                return false;
            }
            array_pop($stack);
        }
    }
    return empty($stack);
}*/