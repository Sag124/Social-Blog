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
// */
// Route::get('protected', ['middleware' => ['auth', 'admin'], function() {
//     return "this page requires that you be logged in and an Admin";
// }]);
Route::get('/','PagesController@getIndex');
Route::get('/about','PagesController@getAbout');
Route::get('/contact','PagesController@getContact');
Route::get('/logout', 'Auth\LoginController@logout');
Route::resource('posts','PostController');
Route::resource('contact', 'ContactController');
Route::resource('tags','TagController');
Route::resource('category','CategoryController', ['except' => 'create']);
Route::get('/blog/{slug}',  ['as' => 'blog.single', 'uses' => 'BlogController@getSingle'])->where('slug','[\w\d\-\_]+');
Route::get('/blog',	['uses' => 'BlogController@getIndex', 'as' => 'blog.index']);

Auth::routes();

//Comment

	Route::post('comments/{post_id}', ['uses' => 'CommentController@store', 'as' => 'comments.store']);
	Route::get('comments/{id}/edit', ['uses' => 'CommentController@edit', 'as' => 'comments.edit']);
	Route::put('comments/{id}', ['uses' => 'CommentController@update', 'as' => 'comments.update']);
	Route::delete('comments/{id}', ['uses' => 'CommentController@destroy', 'as' => 'comments.destroy']);
	Route::get('comments/{id}/delete', ['uses' => 'CommentController@delete', 'as' => 'comments.delete']);

Route::get('/home', 'HomeController@index');
