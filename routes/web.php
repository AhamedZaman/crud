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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/contact','ContactController@Contact');
Route::get('/add-contact','ContactController@AddContact')->name('add.contact');
Route::get('/show-contact','ContactController@ShowContact')->name('show.contact');
Route::get('delete/{id}','ContactController@Delete');
Route::get('view/{id}','ContactController@View');
Route::post('/insert-contact','ContactController@Insert');
Route::post('/update-contact/{id}','ContactController@Update');
Route::get('/edit/{id}','ContactController@Edit');