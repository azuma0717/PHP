<?php
namespace App\Model\Entity;
use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

class Cart extends Entity
{
  protected $_accessible = array(

    '*' => true,
    'id' => false
  );
}
