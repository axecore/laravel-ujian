<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLoginForm()
    {
        
    }

    public function showRegisterForm()
    {
        return view('auth.register');
    }
}
