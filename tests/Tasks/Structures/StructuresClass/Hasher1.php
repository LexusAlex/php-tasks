<?php

namespace Test\Tasks\Structures\StructuresClass;

class Hasher1
{
    public static function hash(string $password): string
    {
        return password_hash($password, PASSWORD_ARGON2I);
    }
}