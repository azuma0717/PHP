<?php
namespace App\Controller;

use Cake\Controller\Controller;
use Cake\Event\Event;

class AppController extends Controller
{

   public function initialize()
   {
       $this->loadComponent('Flash');
       $this->loadComponent('RequestHandler');
       $this->loadComponent('Auth', [
        'authorize' => 'Controller',
           'authenticate' => [
               'Form' => [
                   'fields' => [
                       'username' => 'email',
                       'password' => 'password'
                   ]
               ]
           ],
           'loginAction' => [
               'controller' => 'Users',
               'action' => 'login'
           ],
           'unauthorizedRedirect' => $this->referer() // If unauthorized, return them to page they were just on
       ]);
       $this->Auth->allow(['display','index']);
   }

   public function beforeRender(Event $event)
   {
       if (!array_key_exists('_serialize', $this->viewVars) &&
           in_array($this->response->type(), ['application/json', 'application/xml'])
       ) {
           $this->set('_serialize', true);
       }
   }

public function isAuthorized($user)
{
   $action = $this->request->getParam('action');
   if (in_array($action, ['add', 'tags'])) {
       return true;
   }
   if (!$this->request->getParam('pass.0')) {
       return false;
   }
   $id = $this->request->getParam('pass.0');
   $bookmark = $this->Bookmarks->get($id);
   if ($bookmark->user_id == $user['id']) {
       return true;
   }
   return parent::isAuthorized($user);
}
}
