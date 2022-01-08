<?php

namespace Test\Tasks\Structures;

use PHPUnit\Framework\TestCase;
use Task\Tasks\Structures\User;
use Task\Tasks\Structures\User2;

class AddEmailTest extends TestCase
{
    public function testAddEmail()
    {
        $user = new User(
            id: 42,
            name: 'Vasya',
            description: '123',
            emails: ['vasya@examlpe.com']
        );

        $newEmail = "test@test2.ru";
        // можем поместить этой код внутрь класса
        $changedUser = (!in_array($newEmail, $user->emails)
            ?
            new User(
                id: $user->id,
                name: $user->name,
                description: $user->description,
                emails: [...$user->emails, $newEmail]
            )
            : $user);

        self::assertEquals("test@test2.ru", $changedUser->emails[1]);

        // Например
        $user2 = new User2(42, 'Vasya', '123','vasya@examlpe.com');

        //$this->expectException(\InvalidArgumentException::class);
       //$user2->addEmail('newsite.com');
        ////$user2->addEmail('');

        $user2->addEmail('new@site.com');
        self::assertEquals("new@site.com", $user2->getEmails()[1]);
        $user2->removeEmail('vasya@examlpe.com');
        self::assertFalse(in_array('vasya@examlpe.com' ,$user2->getEmails()));
    }
}