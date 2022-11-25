<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\CartController;
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

// product
Route::get("/", [ProductController::class, "index"]);
Route::get("/product/{slug}", [ProductController::class, "detail"]);

// auth
Route::get("/account/login", [AccountController::class, "login"])->name("login")->middleware("guest");
Route::get("/account/forget-password", [AccountController::class, "forgetPassword"])->middleware("guest");
Route::post("/account/auth", [AccountController::class, "auth"])->middleware("guest");
Route::get("/account/register", [AccountController::class, "register"])->middleware("guest");
Route::post("/account/createuser", [AccountController::class, "createUser"])->middleware("guest");
Route::post("/account/logout", [AccountController::class, "logout"])->middleware("auth");

// cart
Route::get("/cart", [CartController::class, "index"])->middleware("auth");
Route::post("/cart/addItem", [CartController::class, "addItem"])->middleware("auth");
Route::post("/cart/increaseQuantity", [CartController::class, "increaseQuantity"])->middleware("auth");
Route::post("/cart/decreaseQuantity", [CartController::class, "decreaseQuantity"])->middleware("auth");
Route::post("/cart/deleteItem", [CartController::class, "deteteItem"])->middleware("auth");
