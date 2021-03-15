<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::group(['prefix' => 'backend/landing-page/', 'middleware' => ['auth','role']], function () {

    #####################RUTA PARA PAGINAS ESTATICAS#################################################
    Route::get('static-page', 'StaticPageController@index')
        ->name('static-page')
        ->defaults('route', 'static-page');

    Route::get('static-page/create/new', 'StaticPageController@create')
        ->name('create-static-page')
        ->defaults('route', 'static-page');

    Route::post('static-page/store', 'StaticPageController@store')
        ->name('store-static-page');

    Route::get('static-page/edit/{id}', 'StaticPageController@edit')
        ->name('edit-static-page')
        ->defaults('route', 'static-page');

    Route::post('static-page/update', 'StaticPageController@update')
        ->name('update-static-page');

    Route::post('static-page/destroy', 'StaticPageController@destroy')
        ->name('destroy-static-page');



    #####################RUTA PARA PREGUNTAS FRECUENTES###############################
    Route::get('faq', 'FaqController@index')
        ->name('faq')
        ->defaults('route', 'faq');

    Route::get('faq/create/new', 'FaqController@create')
        ->name('create-faq')
        ->defaults('route', 'faq');

    Route::post('faq/store', 'FaqController@store')
        ->name('store-faq');

    Route::get('faq/edit/{id}', 'FaqController@edit')
        ->name('edit-faq')
        ->defaults('route', 'faq');

    Route::post('faq/update', 'FaqController@update')
        ->name('update-faq');

    Route::post('faq/update-faq', 'FaqController@update')->name('updateFaqs')
        ->defaults('orden', 1);

    Route::get('faq/details', 'FaqController@index')
        ->name('faq-details')
        ->defaults('route', 1);

    Route::post('faq/destroy', 'FaqController@destroy')
        ->name('destroy-faq');
});