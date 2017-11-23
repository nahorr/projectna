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


//Home public - pages accessible to the public
Route::get('/', 'HomePublicController@index');
Route::get('/about', 'HomePublicController@about');
Route::get('/products-services', 'HomePublicController@productsServices');
Route::get('/careers', 'HomePublicController@careers');
Route::get('/careers/jobdetails/{job}', 'HomePublicController@jobDetails');
Route::get('/contact', 'HomePublicController@contact');

//careers


//Auth routes
Auth::routes();

//Logged in uers
Route::get('/home', 'HomeController@index')->name('home');
