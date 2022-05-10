<?php

namespace Test\Tasks\Structures\StructuresClass;

class Hasher3
{
    public function hash(string $password, int $cost = 16): string
    {
        return password_hash($password, PASSWORD_ARGON2I, ['memory_cost' => $cost,]);
    }
}