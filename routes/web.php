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
})->name('home');
Route::get('/sceltaaccount/', function () {
    return view('scelta');
})->name('dashboard');
Route::get('/iscrizione/', function () {
    return view('iscrizionesocio');
})->name('iscrizione');
Route::get('/iscrizione2/', function () {
    return view('iscrizionesocio2');
})->name('iscrizione2');
Route::get('/iscrizione3/', function () {
    return view('iscrizionesocio3');
})->name('iscrizione3');
Route::get('/corsi/', function () {
    return view('corsi');
})->name('corsi');
Route::get('/corso/', function () {
    return view('corso');
})->name('corso');
