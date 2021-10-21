<?php

namespace Task\Tasks\Types;

class NotStrictTypes
{
    private string $name;

    public function getName(): string
    {
        return $this->name;
    }
    public function setName(mixed $name)
    {
        $this->name = $name;
    }
}
