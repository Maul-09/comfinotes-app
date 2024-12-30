<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserMiddleware
{
    public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && Auth::user()->user_type == 'user') {
            return $next($request);
        }

        return redirect()->route('/')->withErrors(['error' => 'You are not authorized to access this page.']);
    }
}

