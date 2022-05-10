<?php

namespace Test\Tasks\Structures;

use JetBrains\PhpStorm\Pure;
use PHPUnit\Framework\TestCase;
use Test\Tasks\Structures\StructuresClass\Hasher2;
use Test\Tasks\Structures\StructuresClass\ProfileOne;
use Test\Tasks\Structures\StructuresClass\Profiles;
use Test\Tasks\Structures\StructuresClass\ProfileThree;
use Test\Tasks\Structures\StructuresClass\ProfileTwo;

class StructuresTest extends TestCase
{
    public function testStructures()
    {
        // Профиль пользователя пришедший из базы данных
        $profile = [
            'id' => 42,
            'name' => 'Vasya',
            'emails' => [
                'vasya@examlpe.com'
            ]
        ];

        // Процедура добавления email
        function addEmailProcedure(array &$profile, string $email): void
        {
            if (!in_array($email, $profile['emails'])) {
                $profile['emails'][] = $email;
            }
        }

        // Добавляем сколько нужно адресов
        addEmailProcedure($profile, 'new1@site.com');
        addEmailProcedure($profile, 'new2@site.com');
        addEmailProcedure($profile, 'new3@site.com');

        self::assertCount(4, $profile['emails']);

        // Чистая функция добавления email/ на основе старого профиля делает новый
        function addEmailClear(array $profile, string $email): array
        {
            return
                !in_array($email, $profile['emails'])
                    ? [
                    'id' => $profile['id'],
                    'name' => $profile['name'],
                    'emails' => [ ...$profile['emails'],  $email ]
                ]
                    :  $profile;
        }

        $newProfile = addEmailClear($profile, 'new4@site.com');
        $newProfile2 = addEmailClear($newProfile, 'new5@site.com');
        $newProfile3 = addEmailClear($newProfile2, 'new6@site.com');

        self::assertCount(7, $newProfile3['emails']);

        // но в этом плане массивы неудобны, переходим к работе со структурами
        // Это обычные объекты
        $profileOne = new ProfileOne(
            id: 42,
            name: 'Vasya',
            emails: ['vasya@examlpe.com']
        );

        $profileTwo = new ProfileTwo(
            id: 42,
            name: 'Vasya',
            emails: ['vasya@examlpe.com']
        );

        // Модернизируем функцию
        #[Pure] function addEmailStructure(ProfileOne $profile, string $email): ProfileOne
        {
            return
                !in_array($email, $profile->emails)
                    ? new ProfileOne(
                    id: $profile->id,
                    name: $profile->name,
                    emails: [...$profile->emails, $email]
                )
                    : $profile;
        }

        $newProfile4 = addEmailStructure($profileOne, 'new1@site.com');
        $newProfile5 = addEmailStructure($newProfile4, 'new2@site.com');

        self::assertCount(3, $newProfile5->emails);

        // В процедурах модификация данных идет отдельными подпрограммами
        // В функциональной парадигме из старого объекта модифицируя, возвращаем новый объект

        // Данные хранятся отдельно в массивах и в структурах от их обработчика

        //Объектно-ориентированная парадигма отличается от процедурной и функциональной тем, что подразумевает создание объектов, хранящих свои данные и код для операций по работе с этими данными внутри себя, а не раздельно.

        // Поместим всю работу с объектом внутрь объекта ProfileTree
        // Он сам себя валидирует и проверяет, а именно умеет
        /*
         * 1. При создании объекта, проверять, что имя не пустое и корректный электронный адрес
         * 2. При добавлении нового email адреса проверка, что корректный электронный адрес и его не существует в объекте
         * 3. При удалении адреса проверка, что корректный электронный адрес, не существует в объекте и что он не последний
         *
         */
        $profile = new ProfileThree(42, 'Vasya', 'vasya@examlpe.com');
        $profile->addEmail('new@site.com');
        $profile->addEmail('new3@site.com');
        $profile->addEmail('new4@site.com');
        $profile->removeEmail('new@site.com');

        self::assertCount(3, $profile->getEmails());
        // Теперь наш объект полностью себя контролирует и проверяет и сам работает со своими данными

        // Теперь рассмотрим если есть методы но нет полей, например есть метод хеширования пароля заданный как статический

        //Hasher1::hash('password');
        // или тоже самое, но просто функция
        function hash(string $password): string {
            return password_hash($password, PASSWORD_ARGON2I);
        }

        // Но можно ли добавить нашему объекту состояние в виде параметров

        $hasher2 = new Hasher2(16);
        // тоже сделаем через обычную функцию

        function createHash(int $cost): \Closure
        {
            return function (string $password) use ($cost): string
            {
                return password_hash($password, PASSWORD_ARGON2I, [
                    'memory_cost' => $cost,
                ]);
            };
        }
        $hash1 = createHash(16);

        for ($i = 0; $i <= 10; $i++) {
            //self::assertTrue(password_verify('password', Hasher1::hash('password')));
            //self::assertTrue(password_verify('password', hash('password')));
            //self::assertTrue(password_verify('password', $hasher2->hash('password')));
            //self::assertTrue(password_verify('password', $hash1('password')));
        }

        // В итоге наш код в каком виде он не был оставаться функцией

        // Например, нам нужен вспомогательный объект Profiles, который будет работать с профилями и обрабатывать их
        $profiles = new Profiles();
        $profiles->add(new ProfileThree(42, 'Vasya', 'vasya1@examlpe.com'));
        $profiles->add(new ProfileThree(3456, 'Vasya', 'vasya2@examlpe.com'));
        $profiles->add(new ProfileThree(77, 'Vasya', 'vasya3@examlpe.com'));
        $prof = $profiles->get(77);
        $profiles->remove($prof);

        self::assertCount(2, $profiles->getProfiles());

        // Такой паттерн называется репозиторий
        //Изменяемое состояние + Поведение = Полноценный объект
        //Состояние без Поведения = Структура данных
        //Поведение без Состояния = Процедура или Функция

        // если неудобно хранить данные в отдельных полях можно их группировать по функциональным параметрам
        /*
         * new Profile(
            $id,
            new Name(
                $first,
                $last
            ),
            new Address(
                $city,
                $street,
                $house
            )
        );
         */

        // Здесь поля класса это другие структуры, а не просто строки и числа. В свою очередь другие структуры
        // могут состоять из других структур и тд.

        // DTO - это пачка данных, или просто структуры для передачи куда либо

        /*
         * Что у нас может быть
         * 1. DTO просто структура без поведения
         * 2. Полноценный доменный объект с поведением и данными
         * 3. Вспомогательные объекты значения
         * 4. Объект коллекция
         * 5. Процедура
         * 6. Функция
         */

        // Полноценный объект - это доменная сущность
        // Служебная процедура или функция - сервис

        // Хранение всех сервисов можно доверить сервис контейнеру, который по запросу будет его возвращать

        //Сущность должна хранить и контролировать свои готовые данные о загруженной картинке, а не сама её загружать.
    }
}