<?php

namespace App\Http\Controllers;

use App\Models\Authentikasi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function ShowRegister()
    {
        return view('auth.register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required|string|max:255',
            'password' => 'required|string|min:6|confirmed',
            'user_type' => 'required|in:admin,user',
            'email' => 'required_if:user_type,admin|email|unique:authentikasi,email',
            'grup_number' => 'required_if:user_type,user|numeric|unique:authentikasi,grup_number',
        ]);

        Authentikasi::create([
            'name' => $request->name,
            'email' => $request->email,
            'grup_number' => $request->grup_number,
            'password' => Hash::make($request->password),
            'user_type' => $request->user_type,
        ]);

        return redirect()->route('login.form')->with('success', 'Registration successful!');
    }

    public function handleRegister(Request $request)
    {
        $request->validate([
            'username' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = new User();
        $user->username = $request->username;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('login')->with('success', 'Registration successful. Please login.');
    }

    public function ShowAuth()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'credential' => 'required',
            'password' => 'required|string|min:8',
        ]);

        $field = filter_var($request->credential, FILTER_VALIDATE_EMAIL) ? 'email' : 'grup_number';

        if (Auth::attempt([$field => $request->credential, 'password' => $request->password])) {
            return redirect()->route('dashboard');
        }

        return back()->withErrors(['credential' => 'Invalid credentials'])->withInput();
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }
}

