<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\LandingController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\OurclienController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



Route::get('/service',[ServiceController::class, 'index']);
Route::get('/about',[AboutController::class,'index']);
Route::get('/landingpage',[LandingController::class,'index']);
Route::get('/ourclient',[OurclienController::class,'index']);
Route::get('/login',[LoginController::class,'index']);
