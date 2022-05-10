<?php

namespace Test\Tasks\Structures\StructuresClass;

class ProfileTwo
{
    public function __construct(
        public string $id,
        public string $name,
        public array $emails
    ) {}
}