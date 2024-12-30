<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class AuthController extends Controller
{

    public function ShowAuth()
    {
        return view('auth.login');
    }

}

