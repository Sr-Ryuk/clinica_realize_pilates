<?php

namespace App\Http\Controllers\Instrutor;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('instrutor.dashboard');
    }
}
