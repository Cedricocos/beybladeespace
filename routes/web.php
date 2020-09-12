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

Route::get('/actualites/nouveau', function () {

    return view('news/createNews');
});

Route::get('/actualites/{slug}', 'NewsController@show');

Route::get('/actualites', 'NewsController@showAll');
Route::post('/newsCreate', 'NewsController@create');
