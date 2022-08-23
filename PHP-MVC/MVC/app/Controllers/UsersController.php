<?php

namespace App\Controllers;

use Core\Controller;
use App\Models\User;

class UsersController extends Controller
{
    public function index()
    {
        $user = $this->model->get();
        $this->render($user);
    }

    public function create()
    {
        return 'Página de cadastro de usuário';
    }
}