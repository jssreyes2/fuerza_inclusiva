<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::match(['get', 'post'], '/', 'Auth\LoginController@showFrmLogin')->name('login-user');

Route::match(['get', 'post'], 'dashboard/logout', 'Auth\LoginController@logout')->name('logout');


Route::match(['get', 'post'], 'dashboard/register', 'Auth\RegisterController@showRegistrationForm')->name('register');

Route::match(['get', 'post'], 'dashboard/save-user', 'Auth\RegisterController@store')->name('save-user');

#RUTAS PARA CONTACTO

Route::match(['get', 'post'], 'contact', 'ContactController@index')->name('contact');

Route::match(['get', 'post'], 'save-contact', 'ContactController@saveContact')->name('save-contact');

#################