<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'PageController@home')->name('home');
// Route::get('/search','PageController@search')->name('search');
Route::get('test',function(){

	 $post_id =  \App\Vote::where('type',1)->groupBy('post_id')->select(\DB::raw("count('id') as counts"),'post_id')->orderBy('counts','DESC')->pluck('post_id');
	  return \App\Post::whereIn('id',$post_id)->get();

});


Auth::routes();

Route::resource('posts', 'PostController');
Route::get('posts/postStatus/{postID}/{status}', 'PostController@postStatus')->name('postStatus');

Route::resource('users', 'UserController');
Route::resource('categories', 'CategoryController');
Route::resource('votes', 'VoteController');


Route::middleware(['auth'])->group(function(){
	Route::resource('posts/comments', 'CommentController');
	Route::prefix('category')->group(function(){
	     Route::get('/manage', 'CategoryController@index')->name('mange_category');
	     Route::get('/add_category', 'CategoryController@create')->name('add_category');
	     Route::post('/save_category','CategoryController@store')->name('save_category');
	});


	Route::prefix('post')->group(function(){
	    Route::get('/manage', 'PostController@index')->name('manage_post');
	    Route::get('/add_post', 'PostController@create')->name('add_post');
	    Route::post('/save_post', 'PostController@store')->name('save_post');

	});

	Route::post('/addUser','PageController@addUser')->name('addUser');

});
