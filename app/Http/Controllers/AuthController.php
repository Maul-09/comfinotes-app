<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Http\Request;
use App\Models\Autentikasi;
use App\Models\auths;
use App\Models\Users;
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

        $auth = Users::where('group_code', 'username', $validated['group_code'], $validated['username'])->first();

        if ($auth && Hash::check($validated['password'], $auth->password)) {
            Auth::login($auth);

            if ($auth->user_type === 'admin') {
                return redirect()->route('dashboard-admin');
            }

            if ($auth->user_type === 'auth') {
                return redirect()->route('dashboard-user');
            }
        }

        return back()->withErrors(['error' => 'Kode grup atau password salah.']);
    }


    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('login')->with('success', 'Anda berhasil logout.');
    }


}

