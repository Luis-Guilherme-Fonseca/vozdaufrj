<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', function () {return view('principal');})->name('principal');
Route::get('/contato', function () {return view('contato');})->name('contato');
Route::get('/CCMN', function () {return view('CCMN');})->name('CCMN');
Route::get('/BCMT', function () {return view('BCMT');})->name('BCMT');
Route::get('/perfil', function () {return view('Perfil');})->name('Perfil');
Route::get('/cursoAdmin', function () {return view('cursoAdmin');})->name('CurAdmin');
Route::resource('User', 'UserController');
Route::resource('noticia', 'NoticiasController');
Route::post('login', 'UserController@doLogin');
Route::get('/homeAdmin', 'HomeAdminController@index')->name('homeAdmin');

Auth::routes();

Route::get('/home', 'HomeController@index');
