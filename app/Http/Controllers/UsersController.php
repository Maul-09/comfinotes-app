<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;


class UsersController extends Controller
{
    public function DashboardUser() {
        $user = Auth::user();
        if ($user && $user instanceof \App\Models\Autentikasi) {
            return view('user.dashboard-user', compact('user'));
        }

        return redirect()->route('login')->withErrors(['error' => 'User not authenticated']);
    }

    public function StatistikUser()
    {
        return view('user.statistik-user');
    }

    public function RiwayatUser()
    {
        return view('user.riwayat-user');
    }

}
