<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::match(['get', 'post'], '/', 'Auth\LoginController@showFrmLogin')->name('login-user');

Route::match(['get', 'post'], 'dashboard/logout', 'Auth\LoginController@logout')->name('logout');



Route::group(['prefix' => '/', 'middleware' => ['auth', 'check_role_dashboard']], function () {

    #RUTAS PARA TRABAJOS

    Route::match(['get', 'post'], 'jobs', 'JobsController@index')->name('jobs');

    Route::match(['get', 'post'], 'jobs-list', 'JobsController@jobLists')->name('jobs-list');

    Route::match(['get', 'post'], 'post-a-job', 'PostAJobController@index')->name('post-a-job');

    Route::match(['get', 'post'], 'edit-post-a-job/{slug}', 'PostAJobController@editPostAJob')->name('edit-post-a-job');

    Route::match(['get', 'post'], 'save-job', 'JobsController@store')->name('save-job');

    Route::match(['get', 'post'], 'edit-job', 'JobsController@update')->name('edit-job');

    Route::match(['get', 'post'], 'my-posts', 'JobsController@myPosts')->name('my-posts');

    Route::match(['get', 'post'], 'deleted-post', 'JobsController@postDeleted')->name('deleted-post');

    ###############


    #RUTAS PARA COMPAñIAS

    Route::match(['get', 'post'], 'company', 'CompanyProfileController@index')->name('company-profile');

    Route::match(['get', 'post'], 'company-edit/{slug}', 'CompanyProfileController@edit')->name('company-edit');

    Route::match(['get', 'post'], 'update-company', 'CompanyProfileController@update')->name('update-company-profile');

    Route::match(['get', 'post'], 'company-list', 'CompanyProfileController@listCompanies')->name('company-list');

    Route::match(['get', 'post'], 'save-company-profile', 'CompanyProfileController@store')->name('save-company-profile');

    Route::match(['get', 'post'], 'company-detail', 'CompanyDetailController@index')->name('company-detail');

    Route::match(['get', 'post'], 'deleted-company', 'CompanyProfileController@companyDeleted')->name('deleted-company');

    #################


    #RUTAS PARA CANDIDATOS

    Route::match(['get', 'post'], 'candidate-profile', 'CandidateProfileController@index')->name('candidate-profile');

    Route::match(['get', 'post'], 'candidate-list', 'CandidateProfileController@candidateList')->name('candidate-list');

    Route::match(['get', 'post'], 'save-candidate-profile', 'CandidateProfileController@saveProfile')->name('save-candidate-profile');

    Route::match(['get', 'post'], 'update-candidate-profile', 'CandidateProfileController@updateProfile')->name('update-candidate-profile');


    #RUTAS PARA INSTITUTIONS
    Route::match(['get', 'post'], 'ajax-institution-lists', 'InstitutionProfileController@index')
        ->name('ajax-institution-lists');

    Route::match(['get', 'post'], 'save-institution-profile', 'InstitutionProfileController@saveInstitutionProfile')
        ->name('save-institution-profile');

    Route::match(['get', 'post'], 'delete-institution', 'InstitutionProfileController@deleteInstitution')
        ->name('delete-institution');


    #RUTAS PARA EXPERIENCE
    Route::match(['get', 'post'], 'ajax-experience-lists', 'ExperienceProfileController@index')
        ->name('ajax-experience-lists');

    Route::match(['get', 'post'], 'save-experience-profile', 'ExperienceProfileController@saveExperienceProfile')
        ->name('save-experience-profile');

    Route::match(['get', 'post'], 'delete-experience', 'ExperienceProfileController@deleteExperience')
        ->name('delete-experience');


    #RUTAS PARA PERSONAL REFERENCES
    Route::match(['get', 'post'], 'ajax-reference-lists', 'ReferenceProfileController@index')
        ->name('ajax-reference-lists');

    Route::match(['get', 'post'], 'save-reference-profile', 'ReferenceProfileController@saveReferenceProfile')
        ->name('save-reference-profile');

    Route::match(['get', 'post'], 'delete-reference', 'ReferenceProfileController@deleteReference')
        ->name('delete-reference');



    ##############





    #RUTAS PARA CONTACTO

    Route::match(['get', 'post'], 'contact', 'ContactController@index')->name('contact');

    #################

});




Route::match(['get', 'post'], 'dashboard/register', 'Auth\RegisterController@showRegistrationForm')->name('register');

Route::match(['get', 'post'], 'dashboard/save-user', 'Auth\RegisterController@store')->name('save-user');