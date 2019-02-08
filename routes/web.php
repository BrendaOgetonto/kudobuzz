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

Route::get('/admin', function () {
    return view('admin.home');
});

Route::get('/login', 'AdminController@login');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/employees',[ 'as' => 'employees','uses' => 'EmployeesController@index']);
Route::get('/create/', [ 'as' => 'employees.create', 'uses' => 'EmployeesController@create']);

Route::post('/store/', [ 'as' => 'employees.store', 'uses' => 'EmployeesController@store']);

Route::get('/edit/{id}',[ 'as' => 'employees.edit', 'uses' => 'EmployeesController@edit']);

Route::post('/update/{id}', [ 'as' => 'employees.update', 'uses' => 'EmployeesController@update']);

Route::post('/delete/{id}', [ 'as' => 'employees.destroy', 'uses' => 'EmployeesController@destroy']);

Route::get('/jobs/', [ 'as' => 'employees.jobs', 'uses' => 'EmployeesController@jobs']);

