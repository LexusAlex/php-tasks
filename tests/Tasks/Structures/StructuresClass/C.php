<?php

namespace Test\Tasks\Structures\StructuresClass;

use JetBrains\PhpStorm\Pure;

class C
{
    private Db $db;

    public function __construct(Db $db) {
        $this->db = $db;
    }

    #[Pure] public function a() {
        return $this->db->query();
    }
}