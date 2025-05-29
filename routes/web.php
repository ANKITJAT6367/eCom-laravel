<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\UserAuth;
use Illuminate\Support\Facades\Session;

use Illuminate\Support\Facades\Route;

Route::get('/logout', function () {
    Session::forget('user');
    return redirect('/login');
});

Route::view("/login", "login");
Route::post("/login", [UserController::class, 'login']);
Route::get("/", [ProductController::class, 'index']);
Route::get("details/{id}", [ProductController::class, 'details']);
Route::get("search", [ProductController::class, 'search']);
Route::post("add_to_cart", [ProductController::class, 'addtocart']);
Route::get("cartlist", [ProductController::class, 'cartList']);
Route::get("removecart/{id}", [ProductController::class, 'removeCart']);
