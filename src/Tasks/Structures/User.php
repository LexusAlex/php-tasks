<?php

namespace Task\Tasks\Structures;

class User
{
    public function __construct(
        public string $id,
        public string $name,
        public string $description,
        public array $emails
    ) {}
}