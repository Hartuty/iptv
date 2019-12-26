<?php

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
    return view('login');
});

Route::post('/loginuser','LoginController@loginuser');

Route::get('/logout','LoginController@logout');

Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return view('login');
})->name('clear');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/live', function () {
    return view('live');
})->name('live');

Route::get('/database', function () {
    return view('database');
})->name('database');

Route::get('/movie', function () {
    return view('movie');
})->name('movies');

Route::get('/tv', function () {
    return view('tv');
})->name('tv');

Route::get('/upload', function () {
    return view('upload');
})->name('upload');
