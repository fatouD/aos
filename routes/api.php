<?php

use Illuminate\Http\Request;

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
Route::middleware('auth:api')->post('home', 'AlbumController@store');
Route::post('store', 'AlbumController@store')->name('home');
Route::post('upload', 'PhotoController@store');

 Route::post('register', 'AuthController@register');
 Route::post('login', 'AuthController@login');
Route::apiResource('albums', 'AlbumController');
Route::apiResource('photos', 'PhotoController');
  Route::post('albums/{album}/photos', 'PhotoController@store');
