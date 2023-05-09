<?php

use App\Http\Controllers\MobilController;
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

Route::get('/', function () {
    return view('index');
});


Route::get('/dashboard', function() {
    return view('dashboard.index');
})->name("dashboard");


Route::get('/dashboard/data-cars', [MobilController::class, 'index'])->name('components.tabel-cars');

Route::post('/dashboard/data-cars/add', [MobilController::class, 'store'])->name("cars.add");


Route::get('/dashboard/data-user', function() {
    return view('dashboard.components.tabel-users');
})->name('components.tabel-users');
