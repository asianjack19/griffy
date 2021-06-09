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

use App\Http\Controllers\PostsController;

Route::get('/', function () 
{
    return view('welcome');
});


Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

//Create Story
Route::get('/story/create', 'PostsController@createStory')->middleware('auth');
Route::post('/story', 'PostsController@storeStory')->middleware('auth');

//Show Story
Route::get('/story', 'PostsController@indexStory')->middleware('auth');

//React to Story
Route::get('/story/{id}/react','PostsController@reactStory')->middleware('auth');
Route::post('/story/{id}/react', 'PostsController@storeReactStory')->middleware('auth');
