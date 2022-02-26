<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

Route::get('/', [HomeController::class , 'home']);

Route::get('/about', [HomeController::class , 'about']);

Route::get('/page', [HomeController::class , 'page']);

Route::get('/blog', [HomeController::class , 'blog']);

Route::get('/contact', [HomeController::class , 'contact']);

Route::view('/503', '/errors/503')->middleware('construction');