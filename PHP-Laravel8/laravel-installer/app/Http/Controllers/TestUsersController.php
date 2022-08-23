<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class TestUsersController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('usuarios', ['usuarios' => $users]);
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('usuario', compact('user'));
    }

}
