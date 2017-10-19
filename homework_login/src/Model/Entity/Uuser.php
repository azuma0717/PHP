<?php
namespace App\Model\Entity;
use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

class Uuser extends Entity
{
  protected $_accessible = [

    '*' => true,
    'id' => false
  ];

  protected $_hidden = [
    'password'
  ];

  protected function _setPassword($password)
  {
      if (strlen($password) > 0) {
        return (new DefaultPasswordHasher)->hash($password);
      }
  }
}
