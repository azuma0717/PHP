<?php

namespace App\Controller;
use App\Controller\AppController;

  class UusersController extends AppController
  {
    // public $components = array('Session');

    public $paginate = [
    'limit' => 25,
    
    ];


    public function initialize()
    {
       parent::initialize();
       $this->Auth->allow(['logout','insert','login','show','home',]);
       $components = array('Session');
    }

    public function index()
    {
      // echo 'Write: '.$session->read('id');
      $uusers = $this->paginate($this->Uusers);
      $this->set(compact('uusers'));
    }

    public function home()
    {

    }

    public function login(){
    if ($this->request->is('post')) {
           $user = $this->Auth->identify();
          //  print_r($user);

           if ($user) {
            //  echo"ok";
               $this->Auth->setUser($user);
               $this->Uusers->username = $this->Auth->user('username');
               $this->Uusers->id = $this->Auth->user('id');
               $session = $this->request->session();
               $session->write('id',$this->Uusers->id);
               $session->write('username',$this->Uusers->username);
              // echo 'Write: '.$session->read('id');

                $this->Flash->success('Success');
                $this->redirect(['action'=>'index']);
              }
           else{
           $this->Flash->error('Your username or password is incorrect.');
         }
       }
     }
    // Array ( [id] => 28 [username] => test [email] => test@test )

    public function insert()
    {
      //
      $this->loadModel('Uusers');
      $user = $this->Uusers->newEntity();
      if($this->request->is('post')){

        $file  =$this->request->data['imgpath'];
        // print_r($file);exit;
        // Array ( [tmp_name] => /Applications/MAMP/tmp/php/phpTzKpbX [error] => 0 [name] => sanma.jpeg [type] => image/jpeg [size] => 7177 )
        $uploadFileName = $file['name'];
        $this->request->data['imgpath'] = $uploadFileName;
        $user =$this->Uusers->patchEntity($user,$this->request->data);
        $user =$this->Uusers->patchEntity($user,$this->request->getData());

        if($this->Uusers->save($user)){
          $dir = WWW_ROOT.'img/';
        // echo $file['tmp_name'];
          move_uploaded_file($file['tmp_name'], $dir.$uploadFileName);
          $this->Flash->success(__('(The user has been saved.'));
          return $this->redirect(['action' => 'index']);
        }
        $this->Flash->error(__('The user could not be saved. Please, try again.'));
      }
      $this->set(compact('user'));
      $this->set('_serialize',['user']);

}
    public function show(){
       $uusers = $this->paginate($this->Uusers);
       $this->set(compact('uusers'));
    }




  }
