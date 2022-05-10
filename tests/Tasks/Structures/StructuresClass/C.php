<?php

namespace Test\Tasks\Structures\StructuresClass;

class C
{
    private Db $db;

    public function __conscruct(Db $db) {
        $this->db = $db;
    }

    public function a() {
        return $this->db->query();
    }
}