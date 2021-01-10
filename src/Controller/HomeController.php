<?php

namespace App\Controller;

use App\Model\User;

class HomeController
{
    public function index()
    {
        $user = new User('users');
        $user->getAll();
        exit;
    }
}