<?php
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
Route::post('/login', 'Api\Auth\LoginController@login');
Route::post('/register', 'Api\Auth\RegisterController@register');

Route::get('media', 'Api\MediaController@index');

Route::group(['middleware' => 'auth:api'], function(){
   Route::get('details', 'Api\UserController@details');

}); 