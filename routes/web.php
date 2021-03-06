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

Route::get('/', ['as' => 'homepage', 'uses' => 'TeamController@index']);

Route::get('/teams/{id}', ['as' => 'single-team', 'uses' => 'TeamController@show']);

Route::get('/players/{id}', ['as' => 'single-player', 'uses' => 'PlayerController@show']);

Route::get('/register', ['as' => 'register', 'uses'=> 'RegisterController@create']);
Route::post('/register', ['as' => 'register', 'uses' => 'RegisterController@store']);

Route::get('/login', ['as' => 'login', 'uses' => 'LoginController@create']);
Route::post('/login', 'LoginController@store');
Route::get('/logout', ['as' => 'logout', 'uses' => 'LoginController@destroy']);

Route::post('/teams/{team_id}/comments', ['as' => 'team-comments', 'uses' => 'CommentController@store']);

Route::get('/verification/{id}', ['as' => 'verification', 'uses' => 'LoginController@verification']);

Route::get('/news', ['as' => 'news', 'uses' => 'NewsController@index']);
Route::get('/news/{id}', ['as' => 'single-news', 'uses' => 'NewsController@show']);