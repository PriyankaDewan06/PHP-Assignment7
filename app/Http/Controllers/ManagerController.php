<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ManagerController extends Controller
{
    //public function dashboard()
    public function dashboard()
    {
        return view('manager.dashboard');
    }
    public function index()
    {
        return view('manager.index');
    }
    public function login()
    {
        return view('auth.login');
    }
}
