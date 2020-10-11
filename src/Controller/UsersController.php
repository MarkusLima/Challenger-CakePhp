<?php

namespace App\Controller;

use App\Controller\AppController;

class UsersController extends AppController
{
    public function index()
    {
        $user = $this->Users->find()->all();
        //$this->set(['users'=>$user]);
        $this->set(compact('user'));
    }
}