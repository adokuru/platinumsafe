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

Route::middleware('loggedin')->group(function() {
    Route::get('login', 'AuthController@loginView')->name('login-view');
    Route::post('login', 'AuthController@login')->name('login');
});

Route::middleware('auth')->group(function() {
    Route::get('/', 'HomeController@index')->name('dashboard');
    Route::get('logout', 'AuthController@logout')->name('logout');
    Route::get('page/{layout}/{pageName}', 'PageController@loadPage')->name('page');
    Route::resource('admin/users', 'UsersController');
    Route::resource('admin/art', 'FineArtController');
    Route::resource('admin/storage', 'StorageController');
    Route::resource('admin/stones', 'PreciousStoneController');
});
