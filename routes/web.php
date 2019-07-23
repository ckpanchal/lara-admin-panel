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
    return redirect('login');
});

Auth::routes();

Route::group(['middleware' => 'auth'], function () {
	Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
	Route::get('/dashboard', 'Admin\DashboardController@index')->name('dashboard');
	Route::get('/user', 'Admin\UserController@index');
	/*Route::resource('/user', 'Admin\UserController');
	Route::get('/user-list', 'Admin\UserController@getList');*/
});
