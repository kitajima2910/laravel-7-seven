<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/customer/{name?}', function($name = null) {
    return 'Hi ' . $name . '!!!';
});

Route::match(['get', 'post', 'put'], '/', function(Request $request) {
    return $request->method();
});

Route::any('/test', function (Request $request) {
    return $request->method();
});
