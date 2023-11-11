<?php

use App\Http\Controllers\EmployeeController;
use Illuminate\Support\Facades\Route;



//counsellor routes
Route::get('dashboard', [EmployeeController::class, 'dashboard'])->name('dashboard');