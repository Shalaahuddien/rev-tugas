<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

//route resource
Route::resource('/posts', \App\Http\Controllers\PostController::class)->middleware(["withAuth"]);

Route::get('/', function () {
    return view('welcome');
})->name("homepage")->middleware(["withAuth"]);

Route::any("/login", [AuthController::class, "login"])
    ->name('login')
    ->middleware(["noAuth"]);
Route::any("/logout", [AuthController::class, "logout"])
    ->name('logout')
    ->middleware(["withAuth"]);

Route::any("/register", [AuthController::class, "register"])
    ->name('register')
    ->middleware([""]);
