<?php

use App\Http\Controllers\backend\PenggunaController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\backend\PostController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

// Route::get("/pengguna/list", [PenggunaController::class, "index"]);
// Route::get("/pengguna/{id}", [PenggunaController::class, "show"]);
// Route::post("/pengguna", [PenggunaController::class, "store"]);
// Route::post("/pengguna/update/{id}", [PenggunaController::class, "update"]);
// Route::post("/pengguna/{id}", [PenggunaController::class, "destroy"]);

Route::get("/post/list", [PostController::class, "index"]);
Route::get("/post/{id}", [PostController::class, "show"]);
Route::post("/post", [PostController::class, "store"]);
Route::post("/post/update/{id}", [PostController::class, "update"]);
Route::post("/post/{id}", [PostController::class, "destroy"]);
