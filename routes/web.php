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
/*
	Route::get('/', function () {
	    return view('index1');
	});
*/


Route::get('/','PagesController@index');
Route::get('/booking','PagesController@book_checkout');
Route::get('/resume','PagesController@resume');
Route::get('/profile','PagesController@profile');
Route::get('/gallery','PagesController@gallery');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::GET('admin/home','AdminController@index');
Route::GET('admin/editor','EditorController@index');
Route::GET('admin/aeglobalview','EditorController@AdminEditorview');

Route::GET('admin','Admin\LoginController@showLoginForm')->name('admin.login');
Route::POST('admin','Admin\LoginController@login');

Route::POST('admin-password/email','Admin\ForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');
Route::GET('admin-password/reset','Admin\ForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
Route::POST('admin-password/reset','Admin\ResetPasswordController@reset');
Route::GET('admin-password/reset/{token}','Admin\ResetPasswordController@showResetForm')->name('admin.password.reset');
