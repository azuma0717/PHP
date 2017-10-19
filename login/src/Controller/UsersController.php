<?php

//////////////////////////////////////////////
//「アクション」と呼ばれるメソッドを用意。
//特定のURLにアクセスした時に呼び出されるメソッドです。
//ここに、実際にWebページとして表示されるために必要な処理を用意
//アクションは、引数も返値も持たないメソッド。
//コントローラーにメソッドを用意すると、
//そのメソッド名のURLにアクセスした際にそのメソッドが呼び出される
/////////////////////////////////////////////



////namespaceって何に使うんじゃ。/////////////
namespace App\Controller;
//////////////////////////////////////////////
///継承元のファイルパスを指定している。///////
//何に使うかは不明////////////////////////////
use App\Controller\AppController;

class UsersController extends AppController
{

public function initialize()
{
    parent::initialize();
    $this->Auth->allow(['logout','add','imgupload']);
}


public function imgupload()
{
  $this->loadModel('Imguplods');

  $user = $this->Imguplods->newEntity();

      if ($this->request->is('post')) {
             $file  =$this->request->data['imgname'];
             //print_r($file);exit;
             $uploadFileName = time()."_".$file['name'];
             $this->request->data['imgname'] = $uploadFileName;
             $user = $this->Imguplods->patchEntity($user,$this->request->data);

             if ($this->Imguplods->save($user)) {
                 $dir = WWW_ROOT.'imgupload/';
                 move_uploaded_file($file['tmp_name'], $dir.$uploadFileName);
                 $this->Flash->success('The product has been saved');
                 // return $this->redirect(array('action' => 'index'));
             } else {
                 $this->Flash->error('The product could not be saved. Please, try again.');
             }
           }
         $this->set(compact('user'));
}

public function logout()
{
    $this->Flash->success('You are now logged out.');
    // return $this->redirect($this->Auth->logout());
    $this->request->session()->destroy();
    $this->redirect(['controller'=>'users','action'=>'login']);
}

    public function index()
    {
      $session=$this->request->session()->read('id');
      if(!$session){
        $this->redirect(['action'=>'login']);
      }
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
        $this->set('_serialize', ['users']);
    }

    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);

        $this->set('user', $user);
        $this->set('_serialize', ['user']);
    }

    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
        $this->set('_serialize', ['user']);
    }

    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

	public function login()
{
    if ($this->request->is('post')) {
        $user = $this->Auth->identify();
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
}
