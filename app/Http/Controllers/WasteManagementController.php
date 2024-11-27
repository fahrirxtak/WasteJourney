<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WasteManagementController extends Controller
{
    public function index()
    {
        return view('user.waste-management');
    }
}
