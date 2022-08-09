<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }
    public function user()
    {
        # code...
    }
    public function log()
    {
        return view('auth.login');
    }
}
