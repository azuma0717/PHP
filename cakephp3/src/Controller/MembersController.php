<?php

namespace App\Controller;
use App\Controller\AppController;

  class MembersController extends AppController
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
      $user = $this->Members->newEntity();
      if($this->request->is('post')){
        $user =$this->Members->patchEntity($user,$this->request->getData());

        if($this->Members->save($user)){
          $this->Flash->success(__('(The user has been saved.'));
          return $this->redirect(['action' => 'index']);
        }
        $this->Flash->error(__('The user could not be saved. Please, try again.'));
      }
      $this->set(compact('member'));
      $this->set('_serialize',['member']);
    }

    public function edit($id = null)
    {
      if ($this->request->is(['patch', 'post', 'put'])) {
           $user = $this->Members->patchEntity($user, $this->request->getData());
           if ($this->Members->save($user)) {
               $this->Flash->success(__('The user has been saved.'));

               return $this->redirect(['action' => 'index']);
           }
           $this->Flash->error(__('The user could not be saved. Please, try again.'));
       }
       $this->set(compact('user'));
       $this->set('_serialize', ['user']);
    }

  }
