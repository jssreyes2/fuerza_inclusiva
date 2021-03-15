<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::group(['prefix' => 'backend/users/', 'middleware' => ['auth','role']], function () {

    #####################RUTA PARA USUARIOS#################################################
    Route::get('/user', 'UserController@index')
        ->name('user')
        ->defaults('route', 'user');

    Route::post('/user/store', 'UserController@store')
        ->name('store');

    Route::post('/user/update', 'UserController@update')
        ->name('update');

    Route::get('/user/edit/{id}', 'UserController@edit')
        ->name('edit_user')
        ->defaults('route', 'user');

    Route::get('/user/create/new', 'UserController@create')
        ->name('create_user')
        ->defaults('route', 'user');

    Route::post('/user/destroy', 'UserController@destroy')
        ->name('destroyUser');
});