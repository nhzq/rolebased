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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'HomeController@index');


Auth::routes();

// Route::get('/home', function() {
// 	return redirect('/');
// });

Route::get('/home', [
	'uses' => 'HomeController@routeForRole',
	'as' => 'home.route'
]);


Route::get('/superadmin', [
	'uses' => 'SuperAdminController@index',
	'as' => 'superadmin',
	'middleware' => 'roles',
	'roles' => ['Super Admin']
	
]);

Route::get('/webadmin', [
	'uses' => 'WebAdminController@index',
	'as' => 'webadmin',
	'middleware' => 'roles',
	'roles' => ['Web Admin']
]);

Route::get('/systemadmin', [
	'uses' => 'SystemAdminController@index',
	'as' => 'systemadmin',
	'middleware' => 'roles',
	'roles' => ['System Admin']
]);
