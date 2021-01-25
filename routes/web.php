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
Route::get('/data/view', 'SiswaController@index')->name('viewData');
Route::get('/data/{id}/edit', 'SiswaController@edit')->name('editData');
Route::post('/data/{id}/update', 'SiswaController@update')->name('updateData');
Route::get('/data/{id}/delete', 'SiswaController@destroy')->name('deleteData');