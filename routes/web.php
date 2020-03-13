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
Auth::routes();

Route::group(['prefix' => '/'], function() {
    Route::get('/', 'Guest\GuestHomeController@home');
    Route::get('/home', 'Guest\GuestHomeController@home');
});
Route::group(['prefix' => '/app'], function() {
    Route::get('/', 'App\AppHomeController@home');
    Route::get('/home', 'App\AppHomeController@home');
});
Route::group(['prefix'=>'/admin'], function() {
    Route::get('/', 'Admin\AdminDashboardController@dashboard');
    Route::get('/dashboard', 'Admin\AdminDashboardController@dashboard');
    Route::group(['prefix'=>'/users'], function() {
        Route::get('/', 'Admin\AdminUsersController@users');
    });
    Route::group(['prefix'=>'/tasks'], function() {
        Route::get('/', 'Admin\AdminTasksController@tasks');
    });
});
