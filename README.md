
## Сборка

`make docker-build`

## Запуск тестов

`make test`

## Установка библиотек

`docker-compose run --rm php-cli-debian composer require guzzlehttp/guzzle --dev`

## Задачи

### Типы

1. Отсутствие строгой типизации в php [Код](src/Tasks/Types/NotStrictTypes.php) [Тест](tests/Tasks/Types/NotStrictTypesTest.php)
2. Преобразование типов при слабой типизации в php [Тест](tests/Tasks/Types/TypeConversionTest.php)

### Http

1. Http get запрос [Код](src/Tasks/Http/GetRequest.php) [Тест](tests/Tasks/Http/GetRequestTest.php)

### Html

1. Преобразовать символы в сущности `htmlspecialchars` и `htmlentities` [Тест](tests/Tasks/Html/SymbolsInEssenceTest.php)

### Массив

1. Сортировка многомерных массивов `usort` [Тест](tests/Tasks/Array/SortMultiArrayTest.php)

