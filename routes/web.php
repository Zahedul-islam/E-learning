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

Auth::routes();

Route::get('/', function() {
	return view('home');
})->name('home');

Route::get('/about', function() {
	return view('about');
})->name('about');

Route::get('/contact', function(){
	return view('contact');
})->name('contact');

/*Route::get('/questions', 'QuestionController@index')->name('questions');

Route::middleware(['auth'])->group(function(){

	Route::get('/add_question', function(){
		return view('questions.add_questions');
	});

	Route::post('/post_question', 'QuestionController@postQuestion');

});*/

Route::resource('questions', 'QuestionController');

/*Route::get('/questions', 'QuestionController@index')->name('questions');

Route::get('/add_question', 'QuestionController@addQuestion');

Route::post('/post_question', 'QuestionController@postQuestion');*/


/*Route::get('/add_questions', function(){
	return view('questions.add_questions');
})->name('add_questions')->middleware(['auth']);
*/


Route::get('/courses', function() {
	return view('courses');
})->name('courses');

Route::get('/videos', function() {
	return view('videos');
})->name('videos');

Route::get('/subject', 'ContentController@subject'); 
Route::post('/addSubject', 'ContentController@addSubject');
Route::get('/class', 'ContentController@class'); 
Route::post('/addClass', 'ContentController@addClass');
Route::get('/content', 'ContentController@content');
Route::post('/addContent', 'ContentController@addContent');

Route::get('/post', 'PostController@post');
Route::post('/addPost', 'PostController@addPost');

Route::middleware(['check.role:student'])->group(function() {

});

Route::middleware(['check.role:teacher'])->group(function() {

});

Route::middleware(['check.role:admin'])->group(function() {

});