<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class usersController extends Controller
{
    public function login(){

        return view('Auth.login');
    }
    
    public function register(){

        return view('Auth.register');
    }
}
