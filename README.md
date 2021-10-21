
## Сборка

`make docker-build`

## Запуск тестов

`make test`

## Задачи

### Типы

#### 1. Отсутствие строгой типизации в php

Проблема: При отсутствии директивы `declare(strict_types=1)` в классе тип число будет автоматически преобразовано в строку
Если подсунуть другие типы будет ошибка `TypeError: Cannot assign int to property Task\Tasks\Types\NotStrictTypes::$name of type string`

Решение: добавить в начало скрипта `declare(strict_types=1)`

[Код](src/Tasks/Types/NotStrictTypes.php)
[Тест](tests/Tasks/Types/NotStrictTypesTest.php)

