<?php

use Illuminate\Support\Facades\Route;

Auth::routes();

Route::group(['prefix' => 'backend/system_settings/', 'middleware' => ['auth','role']], function () {

    #####################RUTA PARA MENU####################################
    Route::get('menu', 'MenuController@index')
        ->name('menu')
        ->defaults('route', 'menu');

    Route::get('menu/edit/{id}', 'MenuController@edit')
        ->name('edit_menu')
        ->defaults('route', 'menu');

    Route::get('menu/create/new', 'MenuController@create')
        ->name('create_menu')
        ->defaults('route', 'menu');

    Route::post('menu/store', 'MenuController@store')
        ->name('storeMenu');

    Route::post('menu/update', 'MenuController@update')
        ->name('updateMenu');

    Route::post('menu/update_position', 'MenuController@update')
        ->name('updatePosition')
        ->defaults('position', 1);

    Route::get('menu/details', 'MenuController@index')
        ->name('menuDetails')
        ->defaults('route', 1);

    Route::post('menu/destroy', 'MenuController@destroy')
        ->name('destroyMenu');


    #####################RUTA PARA SUB MENU####################################
    Route::get('submenu', 'SubMenuController@index')
        ->name('submenu')
        ->defaults('route', 'submenu');

    Route::get('submenu/edit/{id}', 'SubMenuController@edit')
        ->name('edit_submenu')
        ->defaults('route', 'submenu');

    Route::post('submenu/update', 'SubMenuController@update')
        ->name('updateSubMenu');

    Route::post('submenu/destroy', 'SubMenuController@destroy')
        ->name('destroySubMenu');

    Route::match(['get', 'post'], 'submenu_filtered', 'SubMenuController@index')
        ->name('submenu_filtered');


    ######################RUTA PARA ROLES###############################
    Route::get('/roles', 'RolController@index')
        ->name('rol')
        ->defaults('route', 'rol');

    Route::post('/roles/store', 'RolController@store')
        ->name('storeRol');

    Route::post('/roles/update', 'RolController@update')
        ->name('updateRol');

    Route::get('/roles/edit/{id}', 'RolController@edit')
        ->name('edit_rol')
        ->defaults('route', 'rol');

    Route::get('/roles/create/new', 'RolController@create')
        ->name('create_rol')
        ->defaults('route', 'rol');

    Route::post('/roles/destroy', 'RolController@destroy')
        ->name('destroyRol');

    Route::match(['get', 'post'], '/list_permission_role', 'UserController@listPermissionRole')
        ->name('listPermissionRole');



    ######################RUTA PARA ACTIVITY LOGO###############################
    Route::get('/activity_log', 'ActivityLogController@index')
        ->name('activity_log')
        ->defaults('route', 'activity_log');

    Route::post('/activity_log/store', 'ActivityLogController@store')
        ->name('storeActivityLog');

    Route::post('/activity_log/destroy', 'ActivityLogController@destroy')
        ->name('destroyActivityLog');

});