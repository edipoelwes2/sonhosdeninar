<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::namespace('Admin')->prefix('admin')->as('admin.')->group(function (){

     /** Formulario de Login */
    Route::get('/', 'AuthController@loginForm')->name('login');
    Route::post('login', 'AuthController@login')->name('login.do');

    /** Rotas Protegidas */
    Route::middleware('auth')->group(function (){
        /** Dashboard Home */
        Route::get('home', 'AuthController@home')->name('home');
        
        Route::get('users/team', 'UserController@team')->name('users.team');
        Route::resources([
            'users' => 'UserController',
            /** Empresa */
            'companies' => 'CompanyController',
            /** Categorias */
            'categories' => 'CategoryController',
        ]);
    });

    /** Logout */
    Route::get('logout', 'AuthController@logout')->name('logout');
});
