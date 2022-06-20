<?php

use App\Http\Controllers\CuisineController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('layouts.homepage');
});

Route::get('/signin', function () {
    return view('user.signin');
});

Route::get('/signup', function () {
    return view('user.signup');
});

Route::get('/cuisines/{id}', [\App\Http\Controllers\CuisineController::class, "show"]);
Route::get('/random', [\App\Http\Controllers\CuisineController::class, "random"]);

Route::post('/add', [\App\Http\Controllers\PendingCuisineController::class, "store"]);

Route::resource('cuisines', \App\Http\Controllers\CuisineController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
