<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/', 'HomeController@index');

 Route::get('perfil_usuario', 'HomeController@perfil_usuario');
