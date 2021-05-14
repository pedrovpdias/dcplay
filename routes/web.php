<?php

use Illuminate\Support\Facades\Route;

//Controllers
use App\Http\Controllers\MoviesController;
use App\Http\Controllers\AuthController;

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

Route::get('/', [MoviesController::class, 'getMovies']);

Route::get('admin', [AuthController::class, 'dashboard']);
Route::get('admin/login', [AuthController::class, 'login']);
Route::post('admin/login/validation', [AuthController::class, 'validation'] );
