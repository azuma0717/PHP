<?php
  namespace App\Controller;
  use App\Controller\AppController;
  class RajiesController extends AppController{

    public function index(){
    }

    public function home(){
    }

    public function aboutus(){
      // echo"Aboutus";
    }

    public function contact(){
    }

    public function login(){
      // echo"Aboutus";
    }

    public function example(){
      // echo"Aboutus";
    }
    public function signup(){
      $this -> laodModel('Users');
    }

      // public function add(){
      //   $user =$this->Users->newEntity();
      //   if($this->request->is('post')){
      //      $user = $this->Users->patchEntity($user,$this->request->getData());
      //     if($this->Users->save($user)){
      //        $this->Flash->success(__('The has been saved'));
      //
      //         return $this->redirect{['action'=> 'index']};
      //     }
      //     $this->Flash->error(__('The user could not be saved.Please,try again'));
      //   }
      //   $this->set(compact('user'));
      //   $this->ser('_serialize',['user']);
      // }

      public function add(){
        $user =$this->Users->newEntity();
        if($this->request->is('post')){
           $user = $this->Users->patchEntity($user,$this->request->getData());
          if($this->Users->save($user)){
             $this->Flash->success(__('The has been saved'));

              return $this->redirect{['action'=> 'index']};
          }
          $this->Flash->error(__('The user could not be saved.Please,try again'));
        }
        $this->set(compact('user'));
        $this->ser('_serialize',['user']);
      }




  }

?>
