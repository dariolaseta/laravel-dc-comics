<?php

use App\Http\Controllers\PageController as AdminController;
use Illuminate\Support\Facades\Route;

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

Route::get("/", [AdminController::class, "index"])->name("welcome");
Route::get("/{id}", [AdminController::class, "show"]);
Route::get("/comics/create", [AdminController::class, "create"]);
Route::get("/comics", [AdminController::class, "store"]);

Route::resource('comics', AdminController::class);
