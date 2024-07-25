<?php

use App\Http\Controllers\DiffBindAndSingletonController;
use App\Http\Controllers\LightController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/light/on', [LightController::class, 'turnOn']);
Route::get('/light/off', [LightController::class, 'turnOff']);
Route::get('/diff/bind-singleton', DiffBindAndSingletonController::class);

