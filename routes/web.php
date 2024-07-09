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

route::view('age','age');
route::view('country','country')->middleware('check1');//group of middlewear is used to check
// url = http://127.0.0.1:8000/country?age=19&country=india


                   //How to Use Middleware to group of route 
             
route::middleware('check1')->group(function(){
      route::view('link','age');
      route::view('link1','age');
      route::view('link2','country');
      route::view('link3','country');
}) ;                  

