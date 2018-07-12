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

//for admin routes
Route::get('/admin/login','Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login','Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/admin','AdminController@index')->name('admin.dashboard');
Route::get('/admin/logout','Auth\AdminLoginController@logout')->name('admin.logout');


//Person Route
Route::resource('/admin/person','personController');
Route::get('/admin/person/{id}/delete','personController@destroy');




