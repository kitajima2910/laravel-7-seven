<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/user', 'UserController@index');
// Route::get('/', 'HomeController@index');
Route::get('/home/{locale}', 'HomeController@index');
Route::get('/upload/{locale}', 'UploadController@uploadForm');
Route::post('/upload', 'UploadController@uploadFile')->name('HoaiPXFile');
Route::get('/home/HoaiPX', 'HomeController@index');
Route::get('/about', function() {
    return view('about');
});
Route::get('/contact', function() {
    return view('contact');
});

Route::get('/add-user', 'UserController@insertRecord');
Route::get('/phone-of-user', 'UserController@fetchPhoneByUser');



Route::get('/posts', 'ClientController@getAllPosts');
Route::get('/posts/{id}', 'ClientController@getPostById');
// Route::get('/addPost', 'ClientController@addPost');
// Route::get('/updatePost/{id}', 'ClientController@updatePost');

Route::get('/test', 'TestController@index');


Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@loginSubmit')->name('login.submit');


Route::get('/inner-join', 'UserController@innerJoinClause');
Route::get('/left-join', 'UserController@leftJoinClause');
Route::get('/right-join', 'UserController@rightJoinClause');
