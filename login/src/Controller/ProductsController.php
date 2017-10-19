<?php
namespace App\Controller;

use App\Controller\AppController;

class ProductsController extends AppController
{
  public function initialize()
  {
    parent::initialize();

    // $this->viewBuilder()->layout("customer");          //load the custom layout
  }
  public function index()
  {
    $session = $this->request->session();
    // if($session->read('id')==null)
    // {
    //   $this->redirect('/');
    // }
    $this->loadModel('Users');
    $user = $this->Users->newEntity();
    if ($this->request->is('post')) {
      $user = $this->Users->patchEntity($user,$this->request->getData());
      } else {
      $this->request->data = $user;
      }
      $this->set('user',$user);
      }
}
