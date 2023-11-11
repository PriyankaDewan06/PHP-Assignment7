<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function dashboard()
    {
        return view('admin.dashboard');
    }
    public function index()
    {
        return view('admin.index');
    }
    public function login()
    {
        return view('auth.login');
    }
}
