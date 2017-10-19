<?php

namespace App\Controller;
use App\Controller\AppController;

  class UsersController extends AppController
  {
    public function initialize()
    {
       parent::initialize();
       $this->Auth->allow(['logout','add','imgupload','login','show','home',]);
    }

    public function index()
    {

    }

    public function imgupload()
    {
      $this->loadModel('Imguploads');
      $user = $this->Imguploads->newEntity();

     if ($this->request->is('post')) {
            $file  =$this->request->data['imgname'];
            // print_r($file);exit;
            $uploadFileName = time()."_".$file['name'];
            $this->request->data['imgname'] = $uploadFileName;
            $user = $this->Imguploads->patchEntity($user,$this->request->data);
            // echo "<pre>";print_r($user);
            if ($this->Imguploads->save($user)) {
                $dir = WWW_ROOT.'img/';
                // echo $file['tmp_name'];
                move_uploaded_file($file['tmp_name'], $dir.$uploadFileName);
                $this->Flash->success('The product has been saved');
                // return $this->redirect(array('action' => 'index'));
            } else {
                $this->Flash->error('The product could not be saved. Please, try again.');
            }
          }
        $this->set(compact('user'));
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
                $this->redirect(['action'=>'home']);
             //  }

           }
           else{
           $this->Flash->error('Your username or password is incorrect.');
         }
       }
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
          return $this->redirect(['action' => 'show']);
        }
        $this->Flash->error(__('The user could not be saved. Please, try again.'));
      }
      $this->set(compact('user'));
      $this->set('_serialize',['user']);

    }

    public function show(){
       $users = $this->paginate($this->Users);
       $this->set(compact('users'));
    }

    public function edit($id = null){
       $users = $this->Users->get($id);
       if ($this->request->is(['put','post'])) {
           $users = $this->Users->patchEntity($users,$this->request->data);
           if ($this->Users->save($users)) {
               $this->Flash->success('success');
               $this->redirect(['action'=>'show']);
           }
       }
       $this->set(compact('users'));
    }

    public function delete($id = null){
       $users = $this->Users->get($id);

           if ($this->Users->delete($users)) {
               $this->Flash->success('success');
               $this->redirect(['action'=>'show']);
           }
    }



  }
