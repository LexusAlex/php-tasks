
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

### Дата

1. Автоматическое добавление в дату ведущих нулей, функция `sptrintf` [Тест](tests/Tasks/Date/ZeroDateTest.php)

### Число

1. Проверка четности числа, функция `isEven` [Функция](src/Tasks/Types/Integer/isEven.php) [Тест](tests/Tasks/Integer/IsEvenTest.php) 
2. Вывод чисел из диапазона, функция `joinNumbersFromRange` [Функция](src/Tasks/Types/Integer/joinNumbersFromRange.php) [Тест](tests/Tasks/Integer/JoinNumbersFromRangeTest.php)

### Логический тип

1. Проверка таблицы истинности `&&` и `||` [Тест](/tests/Tasks/Bool/TruthTableTest.php)

### Строка

1. Переворот строки без использования циклов, функция `reverseString` [Функция](src/Tasks/Types/String/reverseString.php) [Тест](tests/Tasks/String/ReverseStringTest.php)
2. Работа с многобайтовыми кодировками на примере функций `mb_strlen` и `mb_substr` [Тест](tests/Tasks/String/EncodingTest.php)

### Шаблоны

1. Работа со шаблонизотором twig [Тест](tests/Tasks/Templates/TwigExampleTest.php)

### Конструкции

1. Циклы. Основы использования. [Тест](tests/Tasks/Construction/CycleTest.php)

