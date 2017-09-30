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

Route::group(['middleware' => 'auth'], function () {
    Route::get('/', 'PagesController@index');

    Route::get('/new', 'PagesController@new');
    Route::get('/tjanster', 'PagesController@services');
    Route::get('/om-oss', 'PagesController@about');
    Route::get('/galleri', 'PagesController@gallery');
    Route::get('/samarbetpartners', 'PagesController@partners');
    Route::get('/kontakt', 'PagesController@contact');
    Route::get('/admin', 'AdminPagesController@index');
    Route::put('user/edit/contact', 'UserController@editContactInformation')->name('edit_contact_information');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
