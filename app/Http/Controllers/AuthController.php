<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Models\Autentikasi;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{

    public function ShowAuth()
    {
        return view('auth.login');
    }

    public function Auth(Request $request)
    {
        $validated = $request->validate([
            'group_code' => 'required|string',
            'password' => 'required|string',
        ]);

        $user = Autentikasi::where('group_code', $validated['group_code'])->first();

        if ($user && Hash::check($validated['password'], $user->password)) {
            Auth::login($user);

            if ($user->user_type == 'admin') {
                return redirect()->route('dashboard-admin');
            }

            if ($user->user_type == 'user') {
                return redirect()->route('dashboard-user');

            } else {
                return back()->withErrors(['error' => 'Kode grup atau password salah.']);
            }
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }


}

