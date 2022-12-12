<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\AuthController;

Route::get('/', function () {
    return view('welcome');
});

//route resource
Route::resource('/posts', \App\Http\Controllers\PostController::class);

Route::get('/', function () {
    return view('welcome');
})->name("homepage")->middleware(["WithAuth"]);

Route::any("/login", [AuthController::class, "login"])
    ->name('login')
    ->middleware(["noAuth"]);
Route::any("/logout", [AuthController::class, "logout"])
    ->name('logout')
    ->middleware(["WithAuth"]);