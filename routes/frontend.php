<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::match(['get', 'post'], '/', 'Auth\LoginController@showFrmLogin')->name('login-user');

Route::match(['get', 'post'], 'dashboard/logout', 'Auth\LoginController@logout')->name('logout');



Route::group(['prefix' => '/', 'middleware' => ['auth', 'check_role_dashboard']], function () {

    #RUTAS PARA TRABAJOS

    Route::match(['get', 'post'], 'jobs', 'JobsController@index')->name('jobs');

    Route::match(['get', 'post'], 'post-a-job', 'PostAJobController@index')->name('post-a-job');

    Route::match(['get', 'post'], 'edit-post-a-job/{slug}', 'PostAJobController@editPostAJob')->name('edit-post-a-job');

    Route::match(['get', 'post'], 'save-job', 'JobsController@store')->name('save-job');

    Route::match(['get', 'post'], 'edit-job', 'JobsController@update')->name('edit-job');

    Route::match(['get', 'post'], 'my-posts', 'JobsController@postLists')->name('my-posts');

    ###############


    #RUTAS PARA CANDIDATOS

    Route::match(['get', 'post'], 'candidate-list', 'CandidateListController@index')->name('candidate-list');

    ##############


    #RUTAS PARA COMPAñIAS

    Route::match(['get', 'post'], 'add-company', 'CompanyProfileController@index')->name('company-profile');

    Route::match(['get', 'post'], 'company-edit/{slug}', 'CompanyProfileController@edit')->name('company-edit');

    Route::match(['get', 'post'], 'update-company', 'CompanyProfileController@update')->name('update-company-profile');

    Route::match(['get', 'post'], 'company-list', 'CompanyProfileController@listCompanies')->name('company-list');

    Route::match(['get', 'post'], 'save-company-profile', 'CompanyProfileController@store')->name('save-company-profile');

    Route::match(['get', 'post'], 'company-detail', 'CompanyDetailController@index')->name('company-detail');

    #################

    #RUTAS PARA CONTACTO

    Route::match(['get', 'post'], 'contact', 'ContactController@index')->name('contact');

    #################
});




Route::match(['get', 'post'], 'dashboard/register', 'Auth\RegisterController@showRegistrationForm')->name('register');

Route::match(['get', 'post'], 'dashboard/save-user', 'Auth\RegisterController@store')->name('save-user');