<?php

namespace App\Controllers;

use App\Controllers\BaseController;

class DashboardController extends BaseController
{
    public function index()
    {
        //

        $datas = [];
        if (in_groups('developer')) {
            $datas = [
                'level' => 'developer',
                'desc'  => 'Kamu Adalah Developer'
            ];
        } elseif (in_groups('admin')) {
            # code..
            $datas = [
                'level' => 'admin',
                'desc'  => 'Kamu Adalah Admin'
            ];
        } elseif (in_groups('user')) {
            $datas = [
                'level' => 'user',
                'desc'  => 'Kamu Adalah Warga'
            ];
        } else {
            $datas = [
                'level' => '',
                'desc'  => 'Kamu Bukan Siapa Siapa'
            ];
        }

        $data = [
            'title' => 'Dashboard - Sistem Informasi RT | Gemsscode',
            'job'   => $datas,
            'email' => user()->email,
            'param' => 'dashboard'
        ];

        return view('dashboard/index', $data);
    }
}
