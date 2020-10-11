<?php

namespace App\Model\Entity;

use Cake\ORM\Entity;

class User extends Entity
{
    public $_accessible = [
        'id'=>true,
        'name'=>true,
        'cpf'=>true,
        'dt_nascimento'=>true,
        'email'=>true,
        'phone'=>true,
        'city'=>true,
        'state'=>true,
        'created'=>true,
        'modified'=>true
    ];
}