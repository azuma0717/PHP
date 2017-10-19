<?php

namespace App\Controller;
use App\Controller\AppController;

  class StudentsController extends AppController
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
      $user = $this->Students->newEntity();
      if($this->request->is('post')){
        $user =$this->Students->patchEntity($user,$this->request->getData());

        if($this->Students->save($user)){
          $this->Flash->success(__('(The user has been saved.'));
          return $this->redirect(['action' => 'index']);
        }
        $this->Flash->error(__('The user could not be saved. Please, try again.'));
      }
      $this->set(compact('student'));
      $this->set('_serialize',['student']);

    }

  }
