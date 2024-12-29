<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController
{
    public function DashboardAdmin()
    {
        return view('admin.dashboard-admin');
    }

    public function KomunitasAdmin()
    {
        return view('admin.komunitas-admin');
    }

    public function StatistikAdmin()
    {
        return view('admin.statistik-admin');
    }

    public function RiwayatAdmin()
    {
        return view('admin.riwayat-admin');
    }
}
