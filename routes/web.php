<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('home');
});

Route::get('/about', function(){
    return view('about');
});
Route::get('/data', 'SiswaController@create');
Route::post('/data', 'SiswaController@store');
