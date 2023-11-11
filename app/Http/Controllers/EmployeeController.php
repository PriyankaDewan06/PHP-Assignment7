<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function dashboard()
    {
        return view('employee.dashboard');
    }
    public function index()
    {
        return view('employee.index');
    }
    public function login()
    {
        return view('auth.login');
    }

}
