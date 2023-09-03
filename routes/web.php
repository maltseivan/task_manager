<?php

use Illuminate\Support\Facades\Route,
    App\Http\Controllers\TaskController,
    App\Http\Controllers\Auth\LoginController,
    App\Http\Controllers\User\ProfileController,
    App\Http\Controllers\Auth\RegisterController;

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

/*Route::get('/', function () {
    return view('home');
})->name('home');*/

Route::get('/', [TaskController::class, 'allData'])->middleware('auth')->name('home');
Route::get('/task/{id}', [TaskController::class, 'showTask'])->name('one-task');
Route::post('/task/submit', [TaskController::class, 'submit'])->name('task-form');
Route::get('/{id}/update', [TaskController::class, 'updateTask'])->name('update-task');
Route::post('/{id}/update', [TaskController::class, 'updateTaskSubmit'])->name('update-task-submit');
Route::get('/{id}/delete', [TaskController::class, 'deleteTask'])->name('task-delete');
Route::get('/register', [RegisterController::class, 'createUser'])->middleware('guest')->name('register-user');
Route::post('/register', [RegisterController::class, 'storeUser'])->middleware('guest')->name('store-user');
Route::get('/login', [LoginController::class, 'loginUser'])->middleware('guest')->name('login-user');
Route::post('/login', [LoginController::class, 'loginSubmit'])->middleware('guest')->name('login-submit');
Route::get('/logout', [LoginController::class, 'logoutUser'])->middleware('auth')->name('logout');
Route::get('/profile', [ProfileController::class, 'dataUser'])->middleware('auth')->name('profile');

Route::get('/about', function () {
    return view('about');
})->name('about');

