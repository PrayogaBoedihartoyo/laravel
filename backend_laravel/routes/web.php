<?php

use App\Http\Controllers\NavController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
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

Route::get('/register', function () {
    return view('register');
});

Route::get('/', [AuthController::class, 'login']);
Route::post('/simpanuser', [AuthController::class, 'simpanuser']);
Route::post('/ceklogin', [AuthController::class, 'ceklogin']);
Route::get('/home', [NavController::class, 'home']);
Route::get('/user', [NavController::class, 'user']);
Route::get('/logout', [AuthController::class, 'logout']);
