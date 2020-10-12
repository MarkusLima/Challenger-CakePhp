<?php

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class UsersTable extends Table
{

    public function initialize(array $config)
    {
        parent::initialize($config);
        $this->setTable('users');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');
        $this->setDisplayField('id');

        $this->addBehavior('Timestamp');
    }


    public function validationDefault(Validator $validator)
    {
        $validator->integer('id')->allowEmpty('id', 'create');
        $validator->scalar('name')->maxLength('name', 100)->requirePresence('name', 'create')->notEmpty('name');
        $validator->scalar('cpf')->maxLength('cpf', 11)->requirePresence('cpf', 'create')->notEmpty('cpf');
        $validator->date('dt_nascimento')->requirePresence('dt_nascimento', 'create')->notEmpty('dt_nascimento');
        $validator->email('email')->requirePresence('email', 'create')->notEmpty('email');
        $validator->scalar('phone')->maxLength('phone', 14)->requirePresence('phone', 'create')->notEmpty('phone');
        $validator->scalar('address')->maxLength('address', 200)->requirePresence('address', 'create')->notEmpty('address');
        $validator->scalar('city')->maxLength('city', 100)->requirePresence('city', 'create')->notEmpty('city');
        $validator->scalar('state')->maxLength('state', 100)->requirePresence('state', 'create')->notEmpty('state');
        return $validator;
    }

    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->isUnique(['email']));
        return $rules;
    }
}
