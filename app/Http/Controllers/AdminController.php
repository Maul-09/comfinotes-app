<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController
{
    public function dashboardAdmin()
    {
        return view('admin.dashboard-admin');
    }
}
