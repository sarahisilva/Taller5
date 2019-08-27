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
Route::get('libro','LibroController@index');
Route::post('libro','LibroController@show');
Route::get('autor','AutorController@index');
Route::get('calificacion/{user}','CalificacionController@show');
Route::get('libro/{id}','LibroController@edit');
Route::post('libro/{id}/{user}','LibroController@update');
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
