<?php

namespace App\Controller;
use App\Controller\AppController;

  class UsersController extends AppController
  {

    public function index()
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
      $user = $this->Users->newEntity();
      if($this->request->is('post')){
        $user =$this->Users->patchEntity($user,$this->request->getData());
        
        if($this->Users->save($user)){
          $this->Flash->success(__('(The user has been saved.'));
          return $this->redirect(['action' => 'index']);
        }
        $this->Flash->error(__('The user could not be saved. Please, try again.'));
      }
      $this->set(compact('user'));
      $this->set('_serialize',['user']);

    }

  }
