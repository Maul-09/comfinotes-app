<?php

namespace App\Http\Controllers;

use App\Models\no;
use Illuminate\Http\Request;

class AuthController
{

    public function ShowAuth()
    {
        return view('auth.login');
    }

    public function ShowRegister()
    {
        return view('auth.register');
    }
}
