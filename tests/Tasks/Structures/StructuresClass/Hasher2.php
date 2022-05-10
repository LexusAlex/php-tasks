<?php

namespace Test\Tasks\Structures\StructuresClass;

class Hasher2
{
    private int $cost;

    public function __construct(int $cost)
    {
        $this->cost = $cost;
    }

    public function hash(string $password): string
    {
        return password_hash($password, PASSWORD_ARGON2I, [
            'memory_cost' => $this->cost,
        ]);
    }
}