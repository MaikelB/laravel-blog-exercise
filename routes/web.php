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

Route::get('/posts/{id}', 'PostController@singlePost');

Route::put('/posts/{id}', function ($id) {
    return view('post', ['title' => "THIS FEATURE ISN'T IMPLEMENTED YET", 'content' => "DEAL WITH IT", 'id' => 42]); // TODO: CONFIGURE ROUTE!!
});

Route::get('/posts/edit/{id}', function () {
    return view('postEdit', ['title' => "THIS FEATURE ISN'T IMPLEMENTED YET", 'content' => "DEAL WITH IT", 'id' => 42]); // TODO: CONFIGURE ROUTE!!
});
Route::post('/posts/edit/{id}', 'PostController@editPost');
Route::get('/posts/edit', 'PostController@newPost');
Route::post('/posts/edit', 'PostController@newPost');


Route::get('/posts/delete/{id}', function($id) {
    return view('/postDelete');
}); 