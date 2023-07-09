<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;



Route::get('/welcome', function () {
    return view('welcome');
});
Route::get('/index',[HomeController::class,'index']);
Route::get('/about',[HomeController::class,'about']);

Route::resource('/products',ProductsController::class);
Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');


