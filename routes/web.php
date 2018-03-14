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

Route::get('/', 'PageController@home')->name('home');
Route::get('/categories', 'PageController@categories')->name('categories');
Route::get('/about', 'PageController@about')->name('about');
Route::get('/faqs', 'PageController@faqs')->name('faqs');
Route::get('/contact', 'PageController@contact')->name('contact');
Route::get('/destroy_advert', 'PageController@destroy_advert')->name('destroy_advert');

Route::get('/advert/show', 'AdvertController@search')->name('adverts.search');
Route::resource('adverts', 'AdvertController');

Route::get('/createUser', 'Auth\RegisterController@getRegions')->name('regionsForRegister');
Auth::routes();

Route::get('/category/{id}', 'CategoryController@getCategory')->name('getCategory');
