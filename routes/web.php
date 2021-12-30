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
});

Route::get('/spkoumbala',function () {
    return view('spkoumbala');
})->name('koumbala');

Route::get('/stogoniere',function () {
    return view('sptogoniere');
})->name('togoniere');

Route::get('/sikolo',function () {
    return view('spsikolo');
})->name('sikolo');

Route::get('/histpalaka',function () {
    return view('histpalaka');
})->name('histpalaka');

Route::get('/culture',function () {
    return view('culpalaka');
})->name('culture');
