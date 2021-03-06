<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\DashboardController;
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

// Authentication
Route::get('login', [AuthenticationController::class, 'login'])->name('login');

Route::get('/', [DashboardController::class, 'index'])->name('home');
Route::get('/table', [DashboardController::class, 'table'])->name('table');
Route::get('/form', [DashboardController::class, 'form'])->name('form');