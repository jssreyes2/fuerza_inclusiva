<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::group(['prefix' => '/', 'middleware' => ['auth', 'check_role_dashboard']], function () {

    #RUTAS PARA TRABAJOS

    Route::match(['get', 'post'], 'jobs', 'Employer\JobsController@index')->name('jobs');

    Route::match(['get', 'post'], 'jobs-list', 'Employer\JobsController@jobLists')->name('jobs-list');

    Route::match(['get', 'post'], 'post-a-job', 'Employer\PostAJobController@index')->name('post-a-job');

    Route::match(['get', 'post'], 'edit-post-a-job/{slug}', 'Employer\PostAJobController@editPostAJob')->name('edit-post-a-job');

    Route::match(['get', 'post'], 'save-job', 'Employer\JobsController@store')->name('save-job');

    Route::match(['get', 'post'], 'edit-job', 'Employer\JobsController@update')->name('edit-job');

    Route::match(['get', 'post'], 'my-posts', 'Employer\JobsController@myPosts')->name('my-posts');

    Route::match(['get', 'post'], 'deleted-post', 'Employer\JobsController@postDeleted')->name('deleted-post');

    ###############


    #RUTAS PARA COMPAñIAS

    Route::match(['get', 'post'], 'company', 'Employer\CompanyProfileController@index')->name('company-profile');

    Route::match(['get', 'post'], 'company-edit/{slug}', 'Employer\CompanyProfileController@edit')->name('company-edit');

    Route::match(['get', 'post'], 'update-company', 'Employer\CompanyProfileController@update')->name('update-company-profile');

    Route::match(['get', 'post'], 'company-list', 'Employer\CompanyProfileController@listCompanies')->name('company-list');

    Route::match(['get', 'post'], 'save-company-profile', 'Employer\CompanyProfileController@store')->name('save-company-profile');

    Route::match(['get', 'post'], 'company-detail', 'Employer\CompanyDetailController@index')->name('company-detail');

    Route::match(['get', 'post'], 'deleted-company', 'Employer\CompanyProfileController@companyDeleted')->name('deleted-company');

    #################
});