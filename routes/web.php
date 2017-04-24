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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::get('forum/{id}', 'ForumController@show');

Route::get('forum/{forum_id}/topic/{id}', 'TopicController@show');
Route::get('forum/{forum_id}/topic/{topic_id}/thread/{thread_id}', 'ThreadController@show');
Route::get('forum/{forum_id}/topic/{topic_id}/thread/{thread_id}/posts', 'PostController@index');
