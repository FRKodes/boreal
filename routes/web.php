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

Route::get('/', 'pagesController@index');
Route::get('beneficios-economicos', 'pagesController@economicos');
Route::get('beneficios-ecologicos', 'pagesController@ecologicos');
Route::get('seguridad', 'pagesController@seguridad');
Route::get('inversion', 'pagesController@inversion');
Route::get('contacto', 'pagesController@contacto');
Route::get('que-es-gnv', 'pagesController@gnv');
