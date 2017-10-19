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
       $this->setDisplayField('id');
       $this->setPrimaryKey('id');
   }

   public function validationDefault(Validator $validator)
   {
       $validator
               ->integer('id')
               ->allowEmpty('id', 'create');
       $validator
               ->requirePresence('username')
               ->notEmpty('username', 'Please fill this field');
               // ->add('username', [
               //     'length' => [
               //         'rule' => ['minLength', 10],
               //         'message' => 'usename need to be at least 5 characters long',
               //       ]
               //   ]);
   //         ->requirePresence('username')
   //         ->notEmpty('username','Name cannot be empty')
   //         ->lengthBetween('username',[4,6],'enter only 4-6 character');
       $validator
               ->email('email')
               ->requirePresence('email', 'create')
               ->notEmpty('email');
       $validator
           ->requirePresence('password', 'create')
           ->notEmpty('password');

       return $validator;
   }

   public function buildRules(RulesChecker $rules)
   {
       $rules->add($rules->isUnique(['username']));
       $rules->add($rules->isUnique(['email']));

       return $rules;
   }
}
