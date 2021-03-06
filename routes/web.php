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

Route::get('/', 'StaticPageController@home')->name('home');


Route::get('/students', 'StudentPageController@home')->name('students');

Route::get('/student/{id}', 'StudentPageController@show')->name('student');

Route::get('/students/db', 'StudentPageController@db')->name('db');
