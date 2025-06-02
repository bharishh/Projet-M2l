<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

    Route::get('/auth/login', [AuthController::class,'showLogin'])->name('login');
    Route::post('/auth/login',[AuthController::class,'doLogin'])->name('auth.doLogin');


    Route::get('/auth/logout', [AuthController::class,'logout'])->name('auth.logout');

    Route::get('/home/acceuil', function () {return view('home.acceuil');})->name('home.acceuil');
