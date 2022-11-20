<?php

use App\Http\Controllers\AccountController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Product
Route::get("/", [ProductController::class, "index"]);

//auth
Route::get("/account/login", [AccountController::class, "login"])->name("login")->middleware("guest");
Route::post("/account/auth", [AccountController::class, "auth"])->middleware("guest");
Route::get("/account/register", [AccountController::class, "register"])->middleware("guest");
Route::post("/account/createuser", [AccountController::class, "createUser"])->middleware("guest");
Route::post("/account/logout", [AccountController::class, "logout"])->middleware("auth");
