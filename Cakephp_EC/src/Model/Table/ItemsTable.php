<?php
namespace App\Model\Table;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class ItemsTable extends Table
{
  public function initialize(array $config)
  {
    parent::initialize($config);

    $this->table('items');
    $this->setTable('items');
    $this->setDisplayField('id');
    $this->setPrimaryKey('id');
  }

  // public function validationDefault(Validator $validator)
  // {
  //     $validator
  //             ->integer('id')
  //             ->allowEmpty('id', 'create');
  //
  //     $validator
  //         ->requirePresence('imgpath', 'create')
  //         ->notEmpty('imgpath');
  //
  //     return $validator;
  // }


}
