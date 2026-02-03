<?php

use Nano\Framework\Facades\Route;

Route::get('/', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('/user/{name}', 'App\Http\Controllers\HomeController@user')->name('user.profile');

Route::post('/validation-test', ['App\Http\Controllers\ValidationController', 'store'])
    ->middleware([\Nano\Framework\Middleware\TestMiddleware::class])
    ->name('test.validation');

Route::get('/api/users', ['App\Http\Controllers\ApiController', 'users'])->name('api.users');
Route::get('/api/status', ['App\Http\Controllers\ApiController', 'status'])->name('api.status');
Route::get('/api/db-test', ['App\Http\Controllers\ApiController', 'dbTest'])->name('api.db-test');
Route::get('/react', function () {
    return view('react');
})->name('react.demo');

// Auth Routes
Route::get('/login', [\App\Http\Controllers\Auth\LoginController::class, 'show']);
Route::post('/login', [\App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::get('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'show']);
Route::post('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'register']);
Route::get('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout']);

// Dashboard
Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->middleware('auth.middleware');
