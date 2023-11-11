<?php

use App\Http\Controllers\ManagerController;
use Illuminate\Support\Facades\Route;



//counsellor routes
Route::group(['middleware' =>['auth', 'verified'], 'prefix' => 'user', 'as' => 'manager.'], function(){

    Route::get('dashboard', [ManagerController::class, 'dashboard'])->middleware(['auth','role:manager'])->name('manager.dashboard');
    
});