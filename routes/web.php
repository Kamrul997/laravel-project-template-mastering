<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
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

Route::get('/users', [UserController::class, 'index'])->name('user.index');
Route::get('/user/edit', [UserController::class, 'edit'])->name('user.edit');
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');

Route::get('/', [TaskController::class, 'index'])->name('task.home');
Route::get('/tasks', [TaskController::class, 'index'])->name('task.index');
Route::get('/task/create', [TaskController::class, 'create'])->name('task.create');
Route::get('/task/edit', [TaskController::class, 'edit'])->name('task.edit');
