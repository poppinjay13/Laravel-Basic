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
    return view('100446/home');
});

Route::get('students', 'StudentsController@index');
Route::post('students','StudentsController@insert'); 

Route::get('fees','FeesController@index'); 
Route::post('fees','FeesController@create'); 

Route::get('search','SearchController@index');
Route::post('search','SearchController@search');