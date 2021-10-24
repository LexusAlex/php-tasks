
## Сборка

`make docker-build`

## Запуск тестов

`make test`

## Установка библиотек

`docker-compose run --rm php-cli-debian composer require guzzlehttp/guzzle --dev`

## Задачи

### Типы

#### 1. Отсутствие строгой типизации в php

Проблема: При отсутствии директивы `declare(strict_types=1)` в классе тип число будет автоматически преобразовано в строку

Если подсунуть другие типы будет ошибка `TypeError: Cannot assign int to property Task\Tasks\Types\NotStrictTypes::$name of type string`

Решение: добавить в начало скрипта `declare(strict_types=1)`

[Код](src/Tasks/Types/NotStrictTypes.php)
[Тест](tests/Tasks/Types/NotStrictTypesTest.php)

### Http

#### 1. Отправка get запроса

Задача: Отправить get запрос на сервер https://httpbin.org

Решение: Установить библиотеку GuzzleHttp, отправить с помощью нее запрос, проверить результат

[Код](src/Tasks/Http/GetRequest.php)
[Тест](tests/Tasks/Http/GetRequestTest.php)

