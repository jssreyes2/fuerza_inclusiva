<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::group(['prefix' => 'backend/registers/', 'middleware' => ['auth','role']], function () {

    #####################RUTA PARA INDUSTRIAS#################################################
    Route::match(['get', 'post'],'/industries', 'IndustryController@index')
        ->name('industries')
        ->defaults('route', 'industries');

    Route::post('/industries/store', 'IndustryController@store')
        ->name('store-industries');

    Route::post('/industries/update', 'IndustryController@update')
        ->name('update-industries');

    Route::get('/industries/edit/{id}', 'IndustryController@edit')
        ->name('edit-industries')
        ->defaults('route', 'industries');

    Route::get('/industries/create/new', 'IndustryController@create')
        ->name('create-industries')
        ->defaults('route', 'industries');

    Route::post('/industries/destroy', 'IndustryController@destroy')
        ->name('destroy-industries');




    #####################RUTA PARA EDUCACION#################################################
    Route::match(['get', 'post'],'/educations', 'EducationController@index')
        ->name('educations')
        ->defaults('route', 'educations');

    Route::post('/educations/store', 'EducationController@store')
        ->name('store-educations');

    Route::post('/educations/update', 'EducationController@update')
        ->name('update-educations');

    Route::get('/educations/edit/{id}', 'EducationController@edit')
        ->name('edit-educations')
        ->defaults('route', 'educations');

    Route::get('/educations/create/new', 'EducationController@create')
        ->name('create-educations')
        ->defaults('route', 'educations');

    Route::post('/educations/destroy', 'EducationController@destroy')
        ->name('destroy-educations');



    #####################RUTA PARA EDUCACION#################################################
    Route::match(['get', 'post'],'/categories', 'CategoryController@index')
        ->name('categories')
        ->defaults('route', 'categories');

    Route::post('/categories/store', 'CategoryController@store')
        ->name('store-categories');

    Route::post('/categories/update', 'CategoryController@update')
        ->name('update-categories');

    Route::get('/categories/edit/{id}', 'CategoryController@edit')
        ->name('edit-categories')
        ->defaults('route', 'categories');

    Route::get('/categories/create/new', 'CategoryController@create')
        ->name('create-categories')
        ->defaults('route', 'categories');

    Route::post('/categories/destroy', 'CategoryController@destroy')
        ->name('destroy-categories');


});