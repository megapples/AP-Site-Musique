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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('personnes','App\Http\Controllers\UserControl@getUsers')->middleware('auth');

Route::get('evenements','App\Http\Controllers\EvenementController@index')->middleware('auth');

Route:: resource('evenements','App\Http\Controllers\EvenementController');