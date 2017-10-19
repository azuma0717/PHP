<?php
namespace App\Model\Table;
use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

class YukiesTable extends Table
{
  public function initialize(array $config)
{
  parent::initialize($config);

  $this->setTable('yukies');
  $this->setDisplayField('id');
  $this->setPrimaryKey('id');
}


}
