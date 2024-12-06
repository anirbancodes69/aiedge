<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register_form(){
        return view('content.auth.register');
    }

    public function login_form(){
        return view('content.auth.login');
    }
}