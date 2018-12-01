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

Route::get('/', 'PagesController@index')->name('index');

Route::get('/contact', 'PagesController@contact')->name('contact');
Route::get('/products', 'PagesController@products')->name('products');

Route::group(['prefix'=>'admin'],function(){

	Route::get('/', 'AdminPagesController@index')->name('admin.index');
	Route::get('/product/create', 'AdminPagesController@create')->name('admin.product.create');
	Route::get('/product/manage', 'AdminPagesController@manage')->name('admin.product.manage');
	Route::post('/product/create', 'AdminPagesController@store')->name('admin.product.store');

});
