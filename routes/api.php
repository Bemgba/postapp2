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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('posts2','\App\Http\Controllers\Auth\PostApiController@allposts');
//Route::post('posts2','\App\Http\Controllers\Auth\PostApiController@postsave');
Route::post('login','\App\Http\Controllers\api\auth\LoginController@login');
Route::post('refresh','\App\Http\Controllers\api\auth\LoginController@refresh');
Route::get('posts/self','\App\Http\Controllers\api\PostController@self');
Route::post('posts/create','\App\Http\Controllers\api\PostController@store');

