<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class ImguploadsTable extends Table
{
   public function initialize(array $config)
   {
       parent::initialize($config);

       $this->setTable('imguploads');
       $this->setDisplayField('id');
       $this->setPrimaryKey('id');
   }

   public function validationDefault(Validator $validator)
   {
       $validator
               ->integer('id')
               ->allowEmpty('id', 'create');

       $validator
           ->requirePresence('imgname', 'create')
           ->notEmpty('imgname');

       return $validator;
   }


}
