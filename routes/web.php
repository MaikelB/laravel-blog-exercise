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

Route::get('/post', function() { 
    return view('post', ['title' => "THIS FEATURE ISN'T IMPLEMENTED YET", 'content' => "DEAL WITH IT"]); // TODO: CONFIGURE ROUTE!!
});

Route::post('/post/{id}', function($id) {
    return view('post', ['title' => "THIS FEATURE ISN'T IMPLEMENTED YET", 'content' => "DEAL WITH IT"]); // TODO: CONFIGURE ROUTE!!
});

Route::put('/post/{id}', function ($id) {
    return view('post', ['title' => "THIS FEATURE ISN'T IMPLEMENTED YET", 'content' => "DEAL WITH IT"]); // TODO: CONFIGURE ROUTE!!
});
