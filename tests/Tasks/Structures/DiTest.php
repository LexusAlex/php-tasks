<?php

namespace Test\Tasks\Structures;

use PHPUnit\Framework\TestCase;
use Test\Tasks\Structures\StructuresClass\A;
use Test\Tasks\Structures\StructuresClass\Hasher3;

class DiTest extends TestCase
{
    public function testDi()
    {
        // Способы внедрения зависимостей
        // Сервис хеширования паролей который мы уже написали

        $hasher = new Hasher3();
        $hash = $hasher->hash('123');

        // Как это не делать в виде класса или просто функция, это функция сервис и более ничего
        // Но часто к функции нужно передать вспомогательные вещи, параметры, а не только входящие данные

        // Например, функции для своей работы могут понадобиться другие функции. Это называется зависимостью

        // В данном случае для успешной работы функции a нужна функция класса B
        $a = new A();

       self::assertEquals(12,$a->a(2));

        //https://elisdn.ru/blog/148/dependency-injection
    }
}