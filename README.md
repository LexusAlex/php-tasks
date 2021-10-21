
## Сборка

`make docker-build`

## Запуск тестов

`make test`

## Задачи

### Типы
1. [Отсутствие строгой типизации в php](src/Tasks/Types/NotStrictTypes.php)
   При отсутствии директивы `declare(strict_types=1)` в классе тип число будет автоматически преобразовано в строку
   Если подсунуть другие типы будет ошибка `TypeError: Cannot assign int to property Task\Tasks\Types\NotStrictTypes::$name of type string`
   
   [Тест](tests/Tasks/Types/NotStrictTypesTest.php) 

