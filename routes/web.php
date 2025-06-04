<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CollabController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('guest')->group(function () {
    Route::get('/auth/login', [AuthController::class,'showLogin'])->name('login');
    Route::post('/auth/login',[AuthController::class,'doLogin'])->name('auth.doLogin');

});

Route::middleware('auth')->group(function () {
    Route::get('/auth/logout', [AuthController::class,'logout'])->name('auth.logout');
    Route::get('/home/acceuil', function () {return view('home.acceuil');})->name('home.acceuil');

    Route::resource('collab', CollabController::class);
});
