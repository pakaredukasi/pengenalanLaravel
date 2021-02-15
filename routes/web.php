<?php

use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function(){
    return view('home');
})->name('home');

Route::get('/about', function(){
    return view('about');
});

Route::get('/login', 'AuthController@login')->name('login');
Route::post('/login', 'AuthController@postlogin')->name('postlogin');
Route::get('/logout', 'AuthController@logout')->name('logout');

Route::group(['middleware' => 'auth'], function(){
    Route::get('/data', 'SiswaController@create');
    Route::post('/data', 'SiswaController@store');
    Route::get('/data/view', 'SiswaController@index')->name('viewData');
    Route::get('/data/{id}/edit', 'SiswaController@edit')->name('editData');
    Route::post('/data/{id}/update', 'SiswaController@update')->name('updateData');
    Route::get('/data/{id}/delete', 'SiswaController@destroy')->name('deleteData');
});
