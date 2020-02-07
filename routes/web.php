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
    return redirect('/home');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/students', 'HomeController@students');
Route::post('/add-student', 'HomeController@addStudent');
Route::post('/multi-action', 'HomeController@multiAction');
Route::get('/students/view/{id}','HomeController@viewStudent');