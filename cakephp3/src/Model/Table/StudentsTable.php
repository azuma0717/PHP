<?php
namespace App\Model\Table;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class StudentsTable extends Table
{
  public function initialize(array $config)
{
  parent::initialize($config);

  $this->setTable('students');
  $this->setDisplayField('id');
  $this->setPrimaryKey('id');
}


}
