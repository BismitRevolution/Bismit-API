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
    return view('welcome');
});

Route::get('/{db}/posts/{id}', 'PostController@show');
Route::get('/{db}/posts/', 'PostController@index');
Route::post('/posts/', 'PostController@store');
Route::get('/example', 'ExampleController@index');

Route::resource('/posts', 'PostController');