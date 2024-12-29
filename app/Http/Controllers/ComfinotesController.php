<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class ComfinotesController extends Controller
{
    public function dashboardUser()
    {
        return view('user.dashboard-user');
    }
}
