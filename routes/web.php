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


Route::get('/', 'CreatesController@index'); 
Route::get('/about', 'CreatesController@about'); 
Route::get('/contact', 'CreatesController@contact'); 
Route::get('/courses', 'CreatesController@courses'); 
Route::get('/price', 'CreatesController@price'); 
Route::get('/sidebarright', 'CreatesController@sidebarright'); 
Route::get('/videos', 'CreatesController@videos'); 
Route::get('/subject', 'ContentController@subject'); 
Route::post('/addSubject', 'ContentController@addSubject');
Route::get('/class', 'ContentController@class'); 
Route::post('/addClass', 'ContentController@addClass');
Route::get('/content', 'ContentController@content');
Route::post('/addContent', 'ContentController@addContent');

Route::get('/post', 'PostController@post');
Route::post('/addPost', 'PostController@addPost');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
