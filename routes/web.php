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
    return view('layouts.homepage');
});

Route::get('/signin', function () {
    return view('user.signin');
});

Route::get('/signup', function () {
    return view('user.signup');
});

Route::get('random', [\App\Http\Controllers\CuisineController::class, "random"]);

Route::resource('cuisines', \App\Http\Controllers\CuisineController::class);