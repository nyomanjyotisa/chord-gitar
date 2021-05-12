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

Route::get('/post', 'LaguController@index');
Route::get('/post/{id}', 'LaguController@show');
Route::get('/post/next', 'LaguController@next');
Route::get('/post/previous', 'LaguController@previous');