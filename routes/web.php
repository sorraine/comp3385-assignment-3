<?php

use App\Http\Controllers\DashboardController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ClientController;

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

Route::get('/about', function () {
    return view('about');
});

Route::get('/dashboard', [DashboardController::class, 'index']) -> middleware('auth');

// Create additional Routes below


// Route for displaying the login form
Route::get('/login', [AuthController::class, 'create'])->name('login');

// Route for processing the login form
Route::post('/login', [AuthController::class, 'store'])->name('login.store');

Route:: get('/clients/add',[ClientController::class, 'add']) -> middleware('auth');
Route:: POST('/clients',[ClientController::class, 'requestclients']) -> middleware('auth');
