<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Login Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class LogoutController extends AppController{
    public function beforeFilter(\Cake\Event\EventInterface $event){
        parent::beforeFilter($event);
        $this->Authentication->addUnauthenticatedActions(['index']);
    }

    public function index(){
        $result = $this->Authentication->getResult();
        // POST, GET を問わず、ユーザーがログインしている場合はリダイレクトします
        if ($result && $result->isValid()) {
            $this->Authentication->logout();
            $this->Flash->success('you loged out!');
        }
        return $this->redirect(['controller' => 'Login', 'action' => 'index']);
    }

}