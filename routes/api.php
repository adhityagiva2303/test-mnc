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

Route::resource('shorturl', 'ShorturlController')->except('show');
// Route::get('shorturl/{query}', 'ShorturlController@show')->where('params', '.*')->name('shorturl.show');
Route::get('shorturl/{slashData?}', 'ShorturlController@show')
    ->where('slashData', '(.*)')->name('shorturl.show');