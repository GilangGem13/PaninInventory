<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\UsersController;


Route::get('/', function () {
    return view('welcome');
});
Route::resource('/Barang', BarangController::class);
Route::get('/Barang', [BarangController::class, 'index'])->name('Barang.index');
Route::resource('/Users', UsersController::class);
Route::get('/Users', [BarangController::class, 'index'])->name('Users.index');
Route::get('Login', [UsersController::class, 'Login'])->name('Login');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
