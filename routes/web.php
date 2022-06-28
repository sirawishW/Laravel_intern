<?php

use App\Models\Nationality;
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
    $nationalities = Nationality::all();
    return view('layouts.homepage', [
        'nationalities' => $nationalities,
    ]);
});

Route::get('/cuisines/{id}', [\App\Http\Controllers\CuisineController::class, "show"]);
Route::get('/pendingCuisines/{id}', [\App\Http\Controllers\PendingCuisineController::class, "show"]);

Route::get('/random', [\App\Http\Controllers\CuisineController::class, "random"]);

Route::post('/add_cuisine', [\App\Http\Controllers\PendingCuisineController::class, "store"])->name('cuisine.add');
Route::post('/approve/{id}', [\App\Http\Controllers\PendingCuisineController::class, "approve"])->name('cuisine.approve');
Route::post('/decline/{id}', [\App\Http\Controllers\PendingCuisineController::class, "destroy"])->name('cuisine.decline');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('cuisines', \App\Http\Controllers\CuisineController::class);
Route::resource('pendingCuisines', \App\Http\Controllers\PendingCuisineController::class);
Route::resource('nationalities', \App\Http\Controllers\NationalityController::class);