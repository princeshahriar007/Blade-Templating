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
//Frontend Routes
Route::get('/', 'FrontendController@index');
Route::get('/about', 'FrontendController@about');
Route::get('/courses', 'FrontendController@course');
Route::get('/staffs', 'FrontendController@staff');
Route::get('/blogs', 'FrontendController@blog');
Route::get('/contact', 'FrontendController@contact');
