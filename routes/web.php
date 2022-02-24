<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ControllerFrameworks;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/saludar', [HomeController::class, 'saludar']);

Route::get('/bootstrap', [ControllerFrameworks::class, 'bootstrap']);

Route::get('/foundation', [ControllerFrameworks::class, 'foundation']);

Route::get('/materialize', [ControllerFrameworks::class, 'materialize']);