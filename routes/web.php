<?php

use App\Http\Controllers\HomeController;
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

Route::get("/",[HomeController::class,"index"]);
Route::post('/insert',[HomeController::class,"store"]);
Route::get("/update/{id}",[HomeController::class,"update"]);
Route::get('/delete/{id}',[HomeController::class,"destroy"]);

Route::get("/usuarios",[HomeController::class,"usuarios"]);