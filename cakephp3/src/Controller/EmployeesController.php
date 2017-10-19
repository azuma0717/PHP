<?php

namespace App\Controller;
use App\Controller\AppController;
use Cake\ORM\TableRegistry;
//  $uses = array('Employee','Yuki');
// $Employee_data = $this->Employee->findAll();
// $Yuki_data  = $this->Yuki->findAll();

  class EmployeesController extends AppController
  {
    public function initialize()
     {
         parent::initialize();
         $this->employees = TableRegistry::get('employees');
         $this->yukies = TableRegistry::get('yukies');
    }

    public function index()
    {

    }

    public function index2()
    {

    }

    public function home()
    {

    }

    public function aboutus()
    {

    }

    public function contact()
    {

    }

    public function login()
    {

    }

    public function signup()
    {

    }

    public function add()
    {
      $user = $this->Employees->newEntity();
      if($this->request->is('post')){
        $user =$this->Employees->patchEntity($user,$this->request->getData());

        if($this->Employees->save($user)){
          $this->Flash->success(__('(The user has been saved.'));
          return $this->redirect(['action' => 'index']);
        }
        $this->Flash->error(__('The user could not be saved. Please, try again.'));
      }
      $this->set(compact('employee'));
      $this->set('_serialize',['employee']);
    }

    public function add2()
    {
      $this->loadModel('Yukies');
      $user = $this->Yukies->newEntity();
      if($this->request->is('post')){
        $user =$this->Yukies->patchEntity($user,$this->request->getData());

        if($this->Yukies->save($user)){
          $this->Flash->success(__('(The user has been saved.'));
          return $this->redirect(['action' => 'index2']);
        }
        $this->Flash->error(__('The user could not be saved. Please, try again.'));
      }
      $this->set(compact('Yuki'));
      $this->set('_serialize',['Yuki']);

    }

  }
