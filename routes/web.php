<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home','App\Http\Controllers\TodoController@show');
route::post('/save-data','App\Http\Controllers\TodoController@store');

route::get('/delete-todo/{id}','App\Http\Controllers\TodoController@destroy')->name('delete-todo');

route::get('/show-todo-details{id}','App\Http\Controllers\TodoController@update');

route::get('/update-data/{id}','App\Http\Controllers\TodoController@edit');

route::put('/update-data/{id}','App\Http\Controllers\TodoController@update');

