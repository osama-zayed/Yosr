<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
///////////////////////User/////////////////////
Route::group([
    'middleware' => 'api',
    'prefix' => 'aaa'
], function ($router) {
    Route::post('login', 'App\Http\Controllers\api\AuthController@login');
    Route::post('register', 'App\Http\Controllers\api\AuthController@register');
    Route::post('logout', 'App\Http\Controllers\api\AuthController@logout');
    Route::post('refresh', 'App\Http\Controllers\api\AuthController@refresh');
    Route::post('me', 'App\Http\Controllers\api\AuthController@me');
});
