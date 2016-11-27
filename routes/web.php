<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/books/{genre}/{id?}', function ($genre, $id = 12) {
    return "Books in the ". ($genre + $id) ." category.";
});
Route::get('/book/{id?}', function ($id = 7) {
    $data['render'] = 'render'.$id;
   return view('test', ['data' => $data]);
});