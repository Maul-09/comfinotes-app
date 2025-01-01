<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Models\Users;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;


class AuthController extends Controller
{

    public function ShowAuth()
    {
        return view('auth.login');
    }

    public function Auth(Request $request)
    {
        $validated = $request->validate([
            'identifikasi' => ['required', 'string'],
            'password' => ['required', 'min:8'],
        ]);

        $auth = Users::where('group_code', $validated['identifikasi'])
                    ->orWhere('username', $validated['identifikasi'])
                    ->first();

        if ($auth && Hash::check($validated['password'], $auth->password)) {
            Auth::login($auth);

            session()->flash('success', 'Selamat datang, ' . $auth->username . '!');

            if ($auth->user_type === 'admin') {
                return redirect()->route('dashboard-admin');
            }

            if ($auth->user_type === 'user') {
                return redirect()->route('dashboard-user');
            }
        }
        return back()->withErrors([
            'error' => 'Kode grup, username, atau password salah.',
        ]);
    }


    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect()->route('login');
    }



}

