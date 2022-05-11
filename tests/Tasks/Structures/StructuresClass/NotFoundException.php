<?php

declare(strict_types=1);

namespace Test\Tasks\Structures\StructuresClass;

use Exception;
use JetBrains\PhpStorm\Pure;

final class NotFoundException extends Exception
{
    private string $id;

    #[Pure] public function __construct(string $id)
    {
        $this->id = $id;
        parent::__construct("No definition or class found for \"$id\".");
    }

    public function getId(): string
    {
        return $this->id;
    }
}