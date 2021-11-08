<?php

use Illuminate\Support\Facades\Route;


use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;



Route::get('/', [HomeController::class, 'index']);

Route::prefix('/admin')->group(function(){
    Route::get('/login', [AdminController::class, 'login'])->name('login');


    Route::get('/register', [AdminController::class, 'register']);


    Route::get('/', [AdminController::class, 'index']);


});

Route::get('/{slug}', [PageController::class, 'index']);

