<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\UserAuth;
use Illuminate\Support\Facades\Route;

Route::get('/login', function () {
    return view('login');
});


Route::post("/login",[UserController::class,'login']);
Route::get("/",[ProductController::class,'index']);
