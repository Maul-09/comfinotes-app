<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->user_type == 'admin') {
            return $next($request);
        }

        return redirect()->route('login')->withErrors(['error' => 'Anda tidak terdaftar sebagai Admin, silahkan lakukan autentikasi']);
    }
}
