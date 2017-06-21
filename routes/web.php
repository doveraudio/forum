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

Route::get('/', 'GuestController@welcome');

Auth::routes();

Route::get('home', 'HomeController@index');
Route::get('user/{id}/inbox', 'InboxController@index');
Route::get('user/{id}/outbox', 'OutboxController@index');
Route::get('user/{id}/message/{message_id}', 'MessageController@viewTemplate');
Route::post('user/{id}/message/store', 'MessageController@store');
Route::get('user/{id}/profile', 'ProfileController@show');
Route::get('user/{id}/profile/edit', 'ProfileController@edit');
Route::get('user/{id}/profile/update', 'ProfileController@update');
Route::get('forum/{id}','ForumController@show');

Route::get('forum/{forum_id}/topic/{id}', 'TopicController@show');
Route::get('forum/{forum_id}/topic/{topic_id}/thread/{thread_id}', 'ThreadController@show');
Route::get('forum/{forum_id}/topic/{topic_id}/thread/{thread_id}/posts', 'PostController@index');