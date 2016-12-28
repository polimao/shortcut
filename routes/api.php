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
Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');



Route::get('/test', function (Request $request) {
    return Response::json(array('key' => 'test vue router'))->setCallback($request->callback);
});

Route::get('/{level_id}/keys', 'LevelController@getKeys');


// // 认证路由...
// Route::get('auth/login', 'Auth\AuthController@getLogin');
// Route::post('auth/login', 'Auth\AuthController@postLogin');
// Route::get('auth/logout', 'Auth\AuthController@getLogout');
// // 注册路由...
// Route::get('auth/register', 'Auth\AuthController@getRegister');
// Route::post('auth/register', 'Auth\AuthController@postRegister');