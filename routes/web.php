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

Route::get('/', function () {
    return view('test');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
Route::get('/reserve', function () {
    return view('reserve');
});

require __DIR__.'/auth.php';
Route::get('/create', function () {
    return view('create');
});


Route::resource('reservations', ReservationController::class);
Route::post('/reservations', 'App\Http\Controllers\ReservationController@store');
Route::post('/reservations', 'App\Http\Controllers\ReservationController@store')->name('reservations.store');