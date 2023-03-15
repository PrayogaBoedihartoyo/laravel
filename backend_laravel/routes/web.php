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

Route::get('/register', [AuthController::class, 'register'])->middleware('guest')->name('register');
Route::get('/', [AuthController::class, 'login'])->middleware('guest')->name('login');
Route::post('/simpanuser', [AuthController::class, 'simpanuser']);
Route::post('/ceklogin', [AuthController::class, 'ceklogin']);
Route::group(['middleware' => 'auth'], function () {
    Route::get('/home', [NavController::class, 'home'])->name('home');
    Route::get('/user', [NavController::class, 'user'])->name('user');
    Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
});
