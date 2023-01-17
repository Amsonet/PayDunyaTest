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



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// === TESTS ROUTES ============

/*Route::get('/dashboard', function () {
    return view('dashbord-paydunya');
});*/

Route::get('/dashboard', [App\Http\Controllers\DashbordController::class, 'index'])->name('dashbord');

Route::get('/', [App\Http\Controllers\NewTransactionController::class, 'index'])->name('home');

Route::get('/home', [App\Http\Controllers\NewTransactionController::class, 'index'])->name('home');
Route::get('/blank', [App\Http\Controllers\NewTransactionController::class, 'index'])->name('home');
Route::post('/SaveTransaction', [App\Http\Controllers\NewTransactionController::class, 'store'])->name('transaction.store');


Route::get('/login2', function () {
    return view('auth.paydunya-login');
});


Route::any('/*', function () {
    return view('welcome');
});