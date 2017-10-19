<?php

namespace App\Controller;
use App\Controller\AppController;


  class UsersController extends AppController
  {

    public $paginate = [
    'limit' => 50,
    // 'contain' => ['Items'],

    ];

    public function initialize()
    {
       parent::initialize();
       $this->Auth->allow(['products','login','signup','ajaxTest',]);
    }


    public function products()
    {
      $this->loadModel('Items');

      $item = $this->paginate($this->Items);
      $this->set(compact('item'));

    }

    public function index()
    {
      $this->loadModel('Items');

      $item = $this->paginate($this->Items);
      $this->set(compact('item'));
    }

    public function login(){
    if ($this->request->is('post')) {
           $user = $this->Auth->identify();
          //  print_r($user);
           if ($user) {
               $this->Auth->setUser($user);
               $this->Users->id = $this->Auth->user('id');
               $session = $this->request->session();
               $session->write('id',$this->Users->id);
                     $this->Flash->success('Success');
             //  if($user['id']===10){
             //   $this->redirect(['controller'=>'products','action'=>'index']);
             //  }
             //  else {
                $this->redirect(['action'=>'index']);
             //  }

           }
           else{
           $this->Flash->error('Your username or password is incorrect.');
         }
       }
     }

    public function signup()
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

    public function test() {
            $this->autoRender = false;
            if ($this->request->is("ajax")) {
                echo "ajax";
            } else {
                echo "not ajax";
            }
        }


  }
