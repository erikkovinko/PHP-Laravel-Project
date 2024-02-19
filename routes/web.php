<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AuthController;
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
    return view('dbcon');
});

Route::get('/user/{id}', [UserController::class, 'show']);

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);


Route::get('/signup', [AuthController::class, 'showRegistrationForm'])->name('signup');
Route::post('/signup', [AuthController::class, 'signup']);
Route::get('/user/{id}', [UserController::class, 'show'])->name('user.profile');
