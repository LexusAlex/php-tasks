<?php

namespace Test\Tasks\Structures\StructuresClass;

class A
{
    public function a($value) {
        $b = new B();
        return $b->b($value) * 2;
    }
}