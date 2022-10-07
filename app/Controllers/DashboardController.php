<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DashboardController extends BaseController
{
    public function index()
    {
        //
        $data = [
            'title' => 'Dashboard - Sistem Informasi RT | Gemsscode',

        ];

        return view('dashboard/index', $data);
    }
}
