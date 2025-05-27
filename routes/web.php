<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\TasksController;
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
    return view('index');
});

Route::prefix('users')->group(function () {
    Route::get('/signin', [UserController::class, 'signin']);
    Route::get('/signup', [UserController::class, 'signup']);
    Route::post('/signup', [UserController::class, 'register'])->name('user.signup');
    Route::post('/signin', [UserController::class, 'login'])->name('user.signin');
    Route::get('/signout', [UserController::class, 'logout']);
});

Route::prefix('tasks')->group(function () {
    Route::get('/upcoming', [TasksController::class, 'upcoming']);
    Route::get('/today', [TasksController::class, 'today']);
    Route::get('/calendar', [TasksController::class, 'calendar']);
    Route::get('/sticky_wall', [TasksController::class, 'sticky_wall']);
});
