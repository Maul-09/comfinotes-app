<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

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
