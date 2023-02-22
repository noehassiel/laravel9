<?php

use Illuminate\Support\Facades\Route;

//Rutas Back
Route::group(['prefix' => 'admin', 'middleware' => ['web', 'can:admin_access']], function () {

    //Rutas generales en back
    Route::get('/dashboard', [
        'uses' => 'DashboardController@admin',
        'as' => 'admin.dashboard',
    ]);


    //Rutas unicas para Webmaster
    Route::group(['prefix' => 'master', 'middleware' => ['web', 'can:all_access']], function () {

        Route::resource('/equipo', 'UserController');
    });

    //Ruta unicas para Webmaster y Admin
    Route::group(['prefix' => 'manage', 'middleware' => ['web', 'can:admin_access']], function () {

        Route::resource('/orders', 'OrderController');
    });
});

//Rutas Front
Route::get('/', function () {
    return view('front.index');
});
