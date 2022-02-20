
## Сборка

`make docker-build`

## Запуск тестов

- `make test` - запуск всех тестов
- `make test-...` - запуск тестов определенного раздела

## Установка библиотек

`docker-compose run --rm php-cli-debian composer require guzzlehttp/guzzle --dev`

## Задачи и тесты

### Типы

1. Отсутствие строгой типизации в php [Код](src/Tasks/Types/NotStrictTypes.php) [Тест](tests/Tasks/Types/NotStrictTypesTest.php)
2. Преобразование типов при слабой типизации в php [Тест](tests/Tasks/Types/TypeConversionTest.php)

### Http

1. Http get запрос [Код](src/Tasks/Http/GetRequest.php) [Тест](tests/Tasks/Http/GetRequestTest.php)

### Html

1. Преобразовать символы в сущности `htmlspecialchars` и `htmlentities` [Тест](tests/Tasks/Html/SymbolsInEssenceTest.php)

### Массив

1. Сортировка многомерных массивов, мультисортировка `usort` [Тест](tests/Tasks/Array/SortMultiArrayTest.php)
2. Применение основных операции к массивам, функция `applyArray` [Функция](src/Tasks/Types/Array/applyArray.php) [Тест](tests/Tasks/Array/ApplyArrayTest.php)
3. Переворот элементов массива в цикле, функция `reverseArray` [Функция](src/Tasks/Types/Array/reverseArray.php) [Тест](tests/Tasks/Array/ReverseArrayTest.php)
4. Непрерывно возрастающая последовательность чисел массива, функция `isContinuousSequence` [Функция](src/Tasks/Types/Array/isContinuousSequence.php) [Тест](tests/Tasks/Array/isContinuousSequenceTest.php)
5. Максимальное значение в массиве, функция `arrayMax` [Функция](src/Tasks/Types/Array/arrayMax.php) [Тест](tests/Tasks/Array/ArrayMaxTest.php)
6. Среднее арифметическое из элементов массива, функция `arrayAverage` два варианта [Функции](src/Tasks/Types/Array/arrayAverage.php) [Тест](tests/Tasks/Array/ArrayAverageTest.php)
7. Сумма указанной валюты, то есть выборка из массива, функция `getTotalAmount` [Функция](src/Tasks/Types/Array/getTotalAmount.php) [Тест](tests/Tasks/Array/GetTotalAmountTest.php)
8. Правильное удаление элементов из массива [Тест](tests/Tasks/Array/RemoveTest.php)
9. Функция `flatten` делает массив плоским, сливая все элементы вложенных массивов [Функция](src/Tasks/Types/Array/flatten.php) [Тест](tests/Tasks/Array/FlattenTest.php)
10. Количество общих уникальных элементов в двух массивах [Тест](tests/Tasks/Array/UniqueElementsTest.php)
11. Сортировка массива методом пузырька `arrayBubbleSort` [Функция](src/Tasks/Types/Array/arrayBubbleSort.php) [Тест](tests/Tasks/Array/ArrayBubbleSortTest.php)
12. Обновление массива/добавление в массив с помощью процедур, меняем состояние возвращаем новую структуру [Функция](src/Tasks/Types/Array/addEmail.php) [Тест](tests/Tasks/Array/ChangeEmailInArrayTest.php)
13. Проверить сбалансированны скобки в строке `checkBalanced`, стек [Функция](src/Tasks/Types/Array/checkBalanced.php) [Тест](tests/Tasks/Array/CheckBalancedTest.php)
14. Найти пересечение двух массивов [Тест](tests/Tasks/Array/IntersectionTest.php)
15. Деструктуризация массива [Тест](tests/Tasks/Array/DestructuringTest.php)
16. Spread оператор в массивах [Тест](tests/Tasks/Array/SpreadTest.php)
17. Разбиваем массив на чанки без использования встроенной функции `array_chunk`, функция `getChunked` [Функция](src/Tasks/Types/Array/getChunked.php) [Тест](tests/Tasks/Array/GetChunkedTest.php). `flatten` обратная операция - сделать массив плоским.
18. Вернуть новый массив по переданным ключам из другого массива [Тест](tests/Tasks/Array/PickTest.php)
19. Извлечение значения по указанным ключам (путь из ключей) [Тест](tests/Tasks/Array/GetInTest.php)
20. Рекурсивный поиск по многомерному массиву, рекурсивная функция `searchArrayRecursive` [Функция](src/Tasks/Types/Array/searchArrayRecursive.php) [Тест](tests/Tasks/Array/SearchArrayRecursiveTest.php)
21. Вычисление обратной польской записи, отличная тренировка на разложение массива [Функция](src/Tasks/Types/Array/calcInPolishNotation.php) [Тест](tests/Tasks/Array/CalcInPolishNotationTest.php)
22. Сравнение двух массивов по ключам [Тест](tests/Tasks/Array/ArrayDiffTest.php)
23. Поиск двух одинаковых строк в файле с выводом массива с этими строками [Тест](tests/Tasks/Array/CompareFilesTest.php)
24. Сгенерировать диапазон ip адресов [Тест](tests/Tasks/Array/RangeIpTest.php)
25. Поиск элемента многомерного массива по переданным парам параметров [Тест](tests/Tasks/Array/ArrayFindTest.php)
26. Map (отображение) [Тест](tests/Tasks/Array/MapTest.php)

### Дата

1. Автоматическое добавление в дату ведущих нулей, функция `sptrintf` [Тест](tests/Tasks/Date/ZeroDateTest.php)

### Число

1. Проверка четности числа, функция `isEven` [Функция](src/Tasks/Types/Integer/isEven.php) [Тест](tests/Tasks/Integer/IsEvenTest.php) 
2. Вывод чисел из диапазона, функция `joinNumbersFromRange` [Функция](src/Tasks/Types/Integer/joinNumbersFromRange.php) [Тест](tests/Tasks/Integer/JoinNumbersFromRangeTest.php)
3. Присвоить рандомные значения, определенному заданному набору элементов, чтобы они не повторялись, функция `randomValues` [Функция](src/Tasks/Types/Integer/randomValues.php) [Тест](tests/Tasks/Integer/RandomValuesTest.php)
4. Бинарное сложение чисел [Тест](tests/Tasks/Integer/BinarySumTest.php)

### Логический тип

1. Проверка таблицы истинности `&&` и `||` [Тест](/tests/Tasks/Bool/TruthTableTest.php)

### Строка

1. Переворот строки без использования циклов для похода по строке, функция `reverseString` [Функция](src/Tasks/Types/String/reverseString.php) [Тест](tests/Tasks/String/ReverseStringTest.php)
2. Работа с много байтовыми кодировками на примере функций `mb_strlen` и `mb_substr` [Тест](tests/Tasks/String/EncodingTest.php)
3. Генерация строки в цикле (как делать правильно, 2 варианта) [Тест](tests/Tasks/String/GenerateStringInCircleTest.php)
4. Обработка строки через массив [Тест](tests/Tasks/String/ProcessingStringTest.php)
5. Количество уникальных символов в строке, функция `countUniqChars` [Функция](src/Tasks/Types/String/countUniqChars.php) [Тест](tests/Tasks/String/CountUniqCharsTest.php)
6. Длина последнего слова в строке [Тест](tests/Tasks/String/LengthOfLastWordTest.php)
7. Последний символ в строке, решение через анонимную функцию [Тест](tests/Tasks/String/LastSymbolInStringTest.php)

### Шаблоны

1. Работа с шаблонизатором twig [Тест](tests/Tasks/Templates/TwigExampleTest.php)

### Конструкции

1. Циклы. Основы использования. [Тест](tests/Tasks/Construction/CycleTest.php)
2. Оператор объединения с null. Просто меньше кода, больше действий. [Тест](tests/Tasks/Construction/NullTest.php)
3. Чистые функции [Тест](tests/Tasks/Construction/ClearFunctionTest.php)

### Структуры

1. Работа со структурами. Модификация данных в объекте. Контроль объекта над своим состоянием. Все манипуляции с данными делаем внутри полноценного объекта [Класс User](src/Tasks/Structures/User.php) [Класс User2](src/Tasks/Structures/User2.php) [Тест](tests/Tasks/Structures/AddEmailTest.php)
2. Код к [статье](https://lexusalex.ru/28-software-design-1) Класс [Course](src/Tasks/Structures/Course.php) [Тест](tests/Tasks/Structures/SoftwareDesignTest.php)

