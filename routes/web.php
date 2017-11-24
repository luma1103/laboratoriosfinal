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
Route::get('/laboratorio', 'LaboratorioController@index');
Route::get('/evento', 'EventoController@index');
Route::post('/labcreate', 'LaboratorioController@create');
Route::post('/evcreate', 'EventoController@create');
Route::post('/labmodificar', 'LaboratorioController@edit');
Route::put('/labmodfin/{id}', 'LaboratorioController@update');
Route::get('/labfin/{id}', 'LaboratorioController@destroy');
Route::post('/eventmodificar', 'EventoController@edit');
Route::put('/evemodfin/{id}', 'EventoController@update');
Route::get('/eventofin/{id}', 'EventoController@destroy');
Route::get('/registro', 'RegistroController@index');
Route::post('/registrocreate', 'RegistroController@create');
Route::get('/registroedit/{id}', 'RegistroController@edit');
Route::put('/registroupdate/{id}', 'RegistroController@update');
Route::get('/registroelim/{id}', 'RegistroController@destroy');



