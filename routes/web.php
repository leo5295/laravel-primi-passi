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
    return view('home');
})->name('home');

Route::get('/chi-siamo', function () {
    return view('chi_siamo');
})->name('chi-siamo');

Route::get('/info', function () {
    return view('info');
})->name('info');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');
