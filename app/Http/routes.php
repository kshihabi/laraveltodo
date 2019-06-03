<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('api/todos', 'TodoController@index');
Route::put('api/todos/{todo}','TodoController@update');
Route::delete('api/todos/{todo}','TodoController@delete');
Route::post('api/todos','TodoController@store');
