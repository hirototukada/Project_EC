<?php

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
Route::get( '/', [IndexContoroller::class, 'index'] );
// mypage
Route::get( '/mypage', [HomeContoroller::class, 'index'] );
