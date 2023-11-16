<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use Illuminate\Routing\RouteGroup;
use Illuminate\Support\Facades\Auth;
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
Route::group(['middleware' => 'auth'], function () {

    Route::get('/', [TaskController::class, 'index'])->name('dashboard');
});
    Route::get('/users', [UserController::class, 'index'])->name('user.index');
    Route::get('/user/edit', [UserController::class, 'edit'])->name('user.edit');
    Route::get('/user/create', [UserController::class, 'create'])->name('user.create');

    Route::get('/tasks', [TaskController::class, 'index'])->name('task.index');
    Route::get('/task/create', [TaskController::class, 'create'])->name('task.create');
    Route::get('/task/edit/{taskId}', [TaskController::class, 'edit'])->name('task.edit');
    Route::post('/task/update', [TaskController::class, 'update'])->name('task.update');
    Route::post('/task/store', [TaskController::class, 'store'])->name('task.store');

    // Route::get('/logout', [AuthenticationController::class, 'logout'])->name('user.logout');
    // Route::post('/login', [AuthenticationController::class, 'authenticate'])->name('user.login');
    // Route::post('/login', [AuthenticationController::class, 'login'])->name('user.login.page');




// Route::get('/login', [HomeController::class, 'loginPage'])->name('login.show');
// Route::get('/register', [HomeController::class, 'registerPage'])->name('register.show');



Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');
