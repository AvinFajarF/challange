<?php

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


Route::get('/dashboard', function() {
    return view('dashboard.index');
})->name("dashboard");


Route::get('/dashboard/data-cars', function() {
    return view('dashboard.components.tabel-cars');
})->name('components.tabel-cars');



Route::get('/dashboard/data-user', function() {
    return view('dashboard.components.tabel-users');
})->name('components.tabel-users');
