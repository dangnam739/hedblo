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

/*User route*/
Route::get('/','HomeController@index');

/*Blog*/
Route::get('/all_blog','BlogController@all_blog');
Route::get('/blog_detail','BlogController@blog_detail');
Route::match(['GET','POST'],'/create_blog','BlogController@create');

/*User authen*/
Route::match(['GET','POST'],'/login','AuthController@login');
Route::match(['GET','POST'],'/register','AuthController@register');
Route::match(['GET','POST'],'/profiles','AuthController@profile');

// Route::match(['GET','POST'],'/users/{id}','Auth\UserController@show');
Route::match(['GET','POST'],'/change-pass','AuthController@change_pass');
Route::get('users/{id}','Auth\UserController@show');
Route::get('users/{id}/edit', 'Auth\UserController@edit');
Route::match(['GET', 'POST'], 'users/{id}/update', 'Auth\UserController@update');
/*Admin route*/
Route::get('admin/home-page','AdminController@index');
Route::match(['GET','POST'],'/admin-change-pass','AdminController@change_pass');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
