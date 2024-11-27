<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $progressData = [
            ['bulan' => 'Jan', 'organik' => 40, 'anorganik' => 30],
            ['bulan' => 'Feb', 'organik' => 45, 'anorganik' => 25],
            ['bulan' => 'Mar', 'organik' => 35, 'anorganik' => 40],
            ['bulan' => 'Apr', 'organik' => 50, 'anorganik' => 35],
        ];

        $recentActivities = [
            ['id' => 1, 'activity' => 'Memilah sampah plastik', 'time' => '2 jam yang lalu'],
            ['id' => 2, 'activity' => 'Mendaur ulang kertas', 'time' => '4 jam yang lalu'],
            ['id' => 3, 'activity' => 'Mengkompos sampah dapur', 'time' => '1 hari yang lalu'],
        ];

        return view('dashboard', compact('progressData', 'recentActivities'));
    }
}

