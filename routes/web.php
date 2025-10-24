<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\PelajarController;
use App\Http\Controllers\MatpelController;

Route::get('/', function () {
    return view('welcome');
});

Route::get(uri: '/hello', action: function () {
    return view('hello');
});

// Route::resource(UserController::class);

Route::get('/user', [UserController::class, 'index']);
Route::get('/pelajar', [PelajarController::class, 'index']);
Route::get('/kelas', [KelasController::class, 'index']);
Route::get('/matpel', [MatpelController::class, 'index']);