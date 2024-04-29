<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\OrderController;

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

Route::get('/', [IndexController::class, 'viewIndex'])->name('index.view');
Route::post('/', [IndexController::class, 'newOrder'])->name('index.buy');

Route::get('/cart', [OrderController::class, 'viewOrder'])->name('order.view');
