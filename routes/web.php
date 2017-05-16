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

Route::get('/', 'PagesController@index');
Route::get('beneficios-economicos', 'PagesController@economicos');
Route::get('beneficios-ecologicos', 'PagesController@ecologicos');
Route::get('seguridad', 'PagesController@seguridad');
Route::get('inversion', 'PagesController@inversion');
Route::get('contacto', 'PagesController@contacto');
Route::get('que-es-gnv', 'PagesController@gnv');
Route::get('preguntas-frecuentes', 'PagesController@faq');
