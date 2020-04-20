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
    return view('index');
});

Route::get('/video', function () {
    return view('video');
});

Route::get('/prospects', function () {
    return view('prospects');
});

Route::post('/prospects', 'ProspectController@store');

Route::get('/email', function () {
    return view('prospects2');
});