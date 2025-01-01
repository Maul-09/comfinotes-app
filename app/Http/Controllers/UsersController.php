<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;


class UsersController extends Controller
{
    public function DashboardUser()
    {
        return view('user.dashboard-user');
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
