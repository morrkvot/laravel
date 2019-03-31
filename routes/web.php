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

Route::get('/user', 'UserController@index');

Route::get('/test', 'TestController@index');

Route::get('/bbs', 'BbsController@index');

Route::post('/bbs', 'BbsController@create');

Route::get('github', 'Github\GithubController@top');
Route::post('github/issue', 'Github\GithubController@createIssue');
Route::get('login/github', 'Auth\LoginController@redirectToProvider');
Route::get('login/github/callback', 'Auth\LoginController@handleProviderCallback');



//Insta homework
Auth::routes();
Route::get('/', 'BbsController@index');
Route::get('/home', 'BbsController@index')->name('home');

//Post picture
Route::get('/post', 'PostController@index');
Route::post('/upload', 'PostController@upload');

//Dynamic user routing
Route::get('/users/{name}', 'UserPageController@index');

//Logout
Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');

