<?php

namespace App\Controller;
use App\Controller\AppController;
use Cake\ORM\TableRegistry;


  class UsersController extends AppController
  {

    public $name = "Users";
    public $uses = array('User');
    public $components = array('Auth');


    public $paginate = [
    'limit' => 50,
    // 'contain' => ['Items'],

    ];

    public function isAuthorized($user)
    {
    $action = $this->request->params['action'];
    // index, add, login, logoutページは誰でも見れる
    if (in_array($action, ['index','login', 'logout','products','signup','cart','addtocart','delete','alldelete','update','address','review'])) {
        return true;
    }

    // リクエストされたページのUser idと
    // ログイン中のUser idが一致する場合はその他のアクションも許可する
    $id = $this->request->params['pass'][0];
    $current_user = $this->Users->get($id);

    if ($current_user->id == $user['id']) {
        return true;
    }
    return parent::isAuthorized($user);
    }

    // public function initialize()
    // {
    //    parent::initialize();
    //    $this->Auth->allow(['login','signup','index','logout','products','addtocart']);
    // }


    public function default()
    {
      $this->loadModel('Items');

      $item = $this->paginate($this->Items);
      $this->set(compact('item'));

    }

    public function products($id = null)
    {
      $this->loadModel('Items');
      $id = $this->request->query['param1'];
    //  $item = $this->paginate($this->Items);全部のテーブルデータを持ってくる＝時間かかりすぎる。↓のやり方だと、狙ったIDだけ引っ張れる。
    $item = $this->Items->get($id);
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
               $this->Users->username = $this->Auth->user('username');
               $session = $this->request->session();
               $session->write('id',$this->Users->id);
               $session->write('username',$this->Users->username);
              //  echo 'Write: '.$session->read('id');
              //  echo 'Write: '.$session->read('username');

                     $this->Flash->success('Success');
              $this->redirect(['action'=>'index']);

              // $test = $this->Auth->user(); 認証したユーザー情報をテーブルから引っ張ってくる
              // Array ( [id] => 1 [username] => yuki [email] => yuki@gmail.com )
              // print_r($test);

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
    }

    // public function test() {
    //         $this->autoRender = false;
    //         if ($this->request->is("ajax")) {
    //             echo "ajax";
    //         } else {
    //             echo "not ajax";
    //         }
    //     }

    public function logout(){
    //  $this->autoRender = false;
     $this->Auth->logout();
     $this->request->session()->destroy();
     $this->Flash->success('see you next');
      $this->redirect(['action'=>'index']);

    }

    public function cart(){
      $this->loadModel('Carts');
      $id = $this->request->session()->read('id');
  //  $item = $this->paginate($this->Items);全部のテーブルデータを持ってくる＝時間かかりすぎる。↓のやり方だと、狙ったIDだけ引っ張れる。

    $cart = $this->Carts->find('all', ['conditions' => ['uid' => $id]]);
    $this->set('cart', $cart);

    }

    public function addtocart()
    {
    //  $this->autoRender = false;
      if($this->request->is('post')){

        if($this->request->session()->read('id'))
        {
            $this->loadModel('Carts');
            $item = $this->Carts->newEntity();
            $item =$this->Carts->patchEntity($item,$this->request->getData());
            if($this->Carts->save($item))
            {
               $this->Flash->success(__('(The user has been saved.'));
               return $this->redirect(['action' => 'index']);
            }
            else
            {
              $this->Flash->error(__('The user could not be saved. Please, try again.'));
            }
        }
        else
        {
          $this->Flash->error(__('Please login first.'));
          return $this->redirect(['action'=>'login']);
        }


       }

    }

      public function delete($param1){
        $this->loadModel('Carts');
        $id = $param1;
         $items = $this->Carts->get($id);

             if ($this->Carts->delete($items)) {
                 $this->Flash->success('success');
                 $this->redirect(['action'=>'cart']);
             }
      }

      public function alldelete(){
        $this->loadModel('Carts');
        $id = $this->request->session()->read('id');
    //  $item = $this->paginate($this->Items);全部のテーブルデータを持ってくる＝時間かかりすぎる。↓のやり方だと、狙ったIDだけ引っ張れる。

      $cart = $this->Carts->find('all', ['conditions' => ['uid' => $id]]);

             if ($this->Carts->deleteAll(['uid' => $id])) {
                 $this->Flash->success('success');
                 $this->redirect(['action'=>'index']);
             }else{
               $this->Flash->success('All item(s) removed from your shopping cart');
               $this->redirect(['action'=>'index']);
             }
      }

      public function update(){

         $this->loadModel('Carts');
         $aa = $this->request->data('quantity');
         $id = $this->request->data('product_id');

        for ($i=0; $i <count($id) ; $i++) {
          $result = $this->Carts->query()
                            ->update()
                            ->set(['quantity'=>$aa[$i]])
                            ->where(['id'=>$id[$i]])
                            ->execute();
        }
        $this->Flash->success('Update success!');
        $this->redirect(['action'=>'cart']);
    }


      public function address(){

             }

      public function review(){

                    }




  }
