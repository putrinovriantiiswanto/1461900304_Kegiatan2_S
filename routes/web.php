<?php

use App\Http\Controllers\WhereController;
use App\Http\Controllers\SWJController;
use App\Http\Controllers\JoinController;
use App\Http\Controllers\SelectController;
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
Route::get('/select', [SelectController::class, 'index']);
Route::get('/where', [WhereController::class, 'index']);
Route::get('/join', [JoinController::class, 'index']);
Route::get('/swj', [SWJtController::class, 'index']);
Route::resource('/', SelectController::class,);
Route::resource('/join_304', JoinController::class,);
Route::resource('/where_0304', JoinController::class,);

