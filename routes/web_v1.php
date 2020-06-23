<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
// Dashboard
Route::get('admin/dashboard', 'DashboardController@index')->name('dashboard');
Route::get('admin/vendors', 'VendorsController@index')->name('vendors');

// Mobile Routes
Route::group(['prefix' => 'api/v1/'], function () {
    Route::post('user/auth', 'UserController@store');
    Route::get('dashboard', 'DashboardController@index');
    Route::get('vendors', 'VendorsController@index')->name('vendors');
});