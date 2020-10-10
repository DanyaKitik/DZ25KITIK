<?php

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

Route::get('/', [\App\Http\Controllers\MemoryController::class, 'home']);

Route::get('/range', [\App\Http\Controllers\MemoryController::class, 'range'])
    ->name('range');

Route::get('/x_range', [\App\Http\Controllers\MemoryController::class, 'x_range'])
    ->name('x_range');
