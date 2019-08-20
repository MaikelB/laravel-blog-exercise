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
    return view('index');
});

Route::get('/posts', 'PostController@index');
Route::get('/posts/single/{id}', 'PostController@singlePost');

Route::get('/posts/new', 'PostController@newPost');
Route::post('/posts/new', 'PostController@newPost');

Route::get('/posts/edit/{id}', 'PostController@editPost');
Route::post('/posts/edit/{id}', 'PostController@editPost');

Route::get('/posts/delete/{id}', 'PostController@deletePost');
Route::post('/posts/delete/{id}', 'PostController@deletePost');