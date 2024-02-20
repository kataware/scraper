<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Login Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class HomeController extends AppController{
    public function beforeFilter(\Cake\Event\EventInterface $event){
        parent::beforeFilter($event);
        $this->Authentication->addUnauthenticatedActions(['index']);
    }

    public function index(){
    }

}