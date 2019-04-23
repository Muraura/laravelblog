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
Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');
Route::get('/contact', 'PagesController@contact');

Route::resource('teams', 'TeamsController');
Route::resource('players', 'PlayersController');
Route::resource('projects', 'ProjectsController');
Route::post('/players/{team}','PlayersController@addPlayer');
Route::post('/teams/{team}/players','PlayersController@addPlayer');



// Route::get('/teams', 'TeamsController@index');
// Route::get('/teams/create', 'TeamsController@create');
// Route::post('/teams', 'TeamsController@store');
// Route::get('/teams/{team}', 'TeamsController@show');
// Route::get('/teams/{team}/edit', 'TeamsController@edit');
// Route::patch('/teams/{team}', 'TeamsController@update');
// Route::delete('/teams/{team}', 'TeamsController@destroy');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
