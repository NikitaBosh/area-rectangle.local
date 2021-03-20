<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RectangleController;

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

// Маршрут для загрузки формы
Route::get(
    '/',
    [RectangleController::class, 'index']
)->name('index');

// Маршрут для вычисления площади прямоугольника
Route::post(
    '/',
    [RectangleController::class, 'area']
)->name('area');
