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

Auth::routes();

Route::get('/manager/login', 'Auth\ManagerLoginController@showLoginForm')->name('manager.login');
Route::post('/manager/login', 'Auth\ManagerLoginController@login')->name('manager.login.submit');

Route::get('/client/login', 'Auth\ClientLoginController@showLoginForm')->name('client.login');
Route::post('/client/login', 'Auth\ClientLoginController@login')->name('client.login.submit');

Route::group(['middleware' => ['manager'], 'prefix' => 'manager'], function () {
	Route::get('', 'ManagerHomeController@index');
	Route::get('/home', 'ManagerHomeController@index');
});

Route::group(['middleware' => ['client'], 'prefix' => 'client'], function () {
	Route::get('', 'ClientHomeController@index');
	Route::get('/home', 'ClientHomeController@index');
});