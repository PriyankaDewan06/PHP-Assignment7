<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\EmployeeController;
use App\Http\Controllers\ManagerController;
use App\Http\Controllers\UserListController;
use App\Http\Controllers\PostController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');


Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
//admin controller
Route::get('admin/dashboard', [AdminController::class, 'dashboard'])->middleware(['auth','role:1'])->name('admin.dashboard');
/** user list routes */
Route::get('userlist/view',[UserListController::class, 'view'])->name('userlist.view');
Route::get('userlist/edit/{id}',[UserListController::class,'edit'])->name('userlist.edit');
Route::post('userlist/update/{id}',[UserListController::class,'update'])->name('userlist.update');
Route::get('userlist/destroy/{id}',[UserListController::class,'destroy'])->name('userlist.destroy');


// //manager controller
Route::get('manager/dashboard', [ManagerController::class, 'dashboard'])->middleware(['auth','role:2'])->name('manager.dashboard');


// //employee controller
Route::get('employee/dashboard', [EmployeeController::class, 'dashboard'])->middleware(['auth','role:3'])->name('employee.dashboard');

Route::group(['middleware' => 'auth'], function(){

    Route::get('/posts/trash', [PostController::class, 'trashed'])->name('posts.trashed');
    Route::get('/posts/{id}/restore', [PostController::class, 'restore'])->name('posts.restore');
    Route::delete('/posts/{id}/force-delete', [PostController::class, 'forceDelete'])->name('posts.force_delete');
    Route::get('posts/index',[PostController::class,'index'])->name('posts.index');
    Route::resource('posts', PostController::class);
});

require __DIR__.'/auth.php';
