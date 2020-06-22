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
Route::get('admin/dashboard', 'v1\DashboardController@index')->name('dashboard');
Route::get('admin/vendors', 'v1\VendorsController@index')->name('vendors');

// Mobile Routes
Route::group(['prefix' => 'api/v1/'], function () {
    Route::post('user/auth', 'v1\UserController@store');
    Route::get('dashboard', 'v1\DashboardController@index');
    Route::get('vendors', 'v1\VendorsController@index')->name('vendors');
});