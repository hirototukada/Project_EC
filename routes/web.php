<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeContoroller;
use App\Http\Controllers\IndexContoroller;
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

// Topぺージ
Route::get('/', [IndexContoroller::class, 'index']);
// mypage
Route::get('/mypage', [HomeContoroller::class, 'index']);
// Auth
Route::get('/login', [LoginController::class, 'index']);
Route::post('/authenticate', [LoginController::class, 'authenticate'])->name('login');
Route::get('/register', [RegisterController::class, 'index']);
Route::post('/signUp', [RegisterController::class, 'signUp'])->name('signUp');
Route::post('/comfirm', [RegisterController::class, 'comfirm'])->name('comfirm');
Route::post('/fin', [RegisterController::class, 'fin'])->name('fin');
