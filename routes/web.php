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


// Admin and Teacher routes
Route::middleware(['auth', 'checkrole:admin,teacher'])->group(function () {
    Route::resource('courses', 'App\Http\Controllers\CourseController', ['except' => ['create', 'edit']]);
});

// Student routes (Read-only)
Route::middleware(['auth', 'checkrole:student'])->group(function () {
    Route::resource('courses', 'App\Http\Controllers\CourseController', ['only' => ['index', 'show']]);
});


Route::resource('users', 'App\Http\Controllers\CourseController', ['except' => ['create', 'edit']]);
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');