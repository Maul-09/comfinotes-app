<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Password;
use Illuminate\Http\Request;
use Illuminate\Auth\Events\PasswordReset;
use Illuminate\Support\Str;
use Illuminate\Routing\Controller as RoutingController;
use Illuminate\Support\Facades\Hash as FacadesHash;

class ResetPasswordController extends RoutingController
{
    // Menampilkan form untuk reset password
    public function showResetForm(Request $request, $token = null)
    {
        return view('auth.passwords.reset')->with(
            ['token' => $token, 'email' => $request->email]
        );
    }

    // Melakukan reset password
    public function reset(Request $request)
    {
        // Validasi input yang diterima
        $request->validate([
            'email' => 'required|email|exists:users,email',
            'password' => 'required|confirmed|min:8', // Password harus konfirmasi dan minimal 8 karakter
            'token' => 'required'
        ]);

        // Melakukan reset password menggunakan token dan email
        $response = Password::reset(
            $request->only('email', 'password', 'password_confirmation', 'token'),
            function ($user) use ($request) {
                // Setel password baru untuk pengguna
                $user->forceFill([
                    'password' => FacadesHash::make($request->password),
                    'remember_token' => Str::random(60),
                ])->save();

                // Trigger event password reset
                event(new PasswordReset($user));
            }
        );

        // Jika berhasil
        if ($response == Password::PASSWORD_RESET) {
            return redirect()->route('login')->with('status', 'Password Anda telah direset!');
        }

        // Jika gagal
        return back()->withErrors(['email' => [trans($response)]]);
    }
}

