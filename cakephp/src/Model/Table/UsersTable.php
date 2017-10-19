<?php
  namespace App\Model\Table;
    use Cake\ORM\Query;
    use Cake\ORM\RuleCheker;
    use Cake\ORM\Table;
    use Cake\Validation\Varlidator;

  class UsersTable extends Table{

    public function initialize(array $config){

      parent::initialize($config);

      $this->setTable('users');
      $this->setDisplayField('id');
      $this->setPrimaryKey('id');
    }

    public function validationDefault(Varlidator $Varlidator){

      $Validator->integer('id')->allowEmpty('id','create');
      $Validator->requirePresence('name')->notEmpty('name','Please fill this field');
      $Validator->requirePresence('mail','create')->notEmpty('mail');
      $Validator->requirePresence('password','create')->notEmpty('password');
      $Validator->integer('phone')->allowEmpty('phone','create');

      return $validator;
    }

    public function buildRules(RulesChecker $rules){

      $rules->add($rules->inUnique(['username']));
      $rules->add($rules->inUnique(['mail']));

      return $rules;
    }


  }



  ?>
