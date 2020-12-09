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
// Route::get('/','HomeController@index');

/*Blog*/
Route::get('/posts','PostController@all_post');
Route::get('/posts/{post_id}','PostController@post_detail')->name('post.show');
Route::match(['GET','POST'],'/posts/{post_id}/comment','PostController@add_comment')->name('post.comment');
Route::get('/posts/tag/{tag_id}','PostController@post_tag');
Route::match(['GET','POST'],'/create_post','PostController@create');
Route::match(['GET','POST'],'/edit/{post_id}','PostController@edit');
Route::get('/posts/delete/{tag_id}','PostController@delete');

/*User authen*/
Route::match(['GET','POST'],'/login','AuthController@login');
Route::match(['GET','POST'],'/register','AuthController@register');
Route::match(['GET','POST'],'/profiles','AuthController@profile');
Route::match(['GET','POST'],'/change-pass','AuthController@change_pass');

/*Admin route*/
Route::get('admin/home-page','AdminController@index');
Route::match(['GET','POST'],'/admin-change-pass','AdminController@change_pass');


Auth::routes();
Route::get('/', 'HomeController@index')->name('home');

#search
Route::get('/search', 'SearchController@index')->name('search.index');
Route::get('/search-results', 'SearchController@search')->name('search.result');




