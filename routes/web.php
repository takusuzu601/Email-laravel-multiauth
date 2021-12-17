<?php

// use App\Http\Controllers\Admin\AdminController;
// use App\Http\Controllers\User\UserController;
// use App\Http\Controllers\Oner\OnerController;
use Illuminate\Support\Facades\Route;

// routeファイルを分割している user,oner,admin
//RouteServiceProviderで設定

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

