<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Network\Exception\NotFoundException;

class UsersController extends AppController
{

public function initialize()
{
   parent::initialize();
   $this->Auth->allow(['logout','add','edit','show','viewresult']);
    $this->loadComponent('RequestHandler');
}

public function index(){
   $users = $this->paginate($this->Users);
   $this->set(compact('users'));
}

public function show(){
   if ($this->request->is("post")) {
       $this->redirect(['action'=>'index']);
   }
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

}
