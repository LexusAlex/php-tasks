<?php

namespace Test\Tasks\Structures\StructuresClass;

class ProfileOne
{
    public int $id;
    public string $name;
    public array $emails;

    public function __construct(int $id, string $name, array $emails)
    {
        $this->id = $id;
        $this->name = $name;
        $this->emails = $emails;
    }
}