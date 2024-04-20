<?php

use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('admin.dashboard.index');
})->name('dashboard');

Route::get('/home', function () {
    return view('client.layout.app');
});

Auth::routes();

Route::resource('roles',RoleController::class);
Route::resource('users',UserController::class);
//  Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
