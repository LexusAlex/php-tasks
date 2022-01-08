<?php

namespace Task\Tasks\Types\Array;

function addEmail(array $data, string $email): array
{
    // Эта функция называется чистой, так как она будет возвращать всегда одинаковый результат
    return
        (!in_array($email, $data['emails'])
            ?
        [
            'id' => $data['id'],
            'name' => $data['name'],
            'emails' => [ ...$data['emails'],  $email ]
        ]
            :  $data);
}