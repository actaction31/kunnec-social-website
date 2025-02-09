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

Route::middleware(['cors'])->group(function () {
    Route::get('get-info', 'SpotApiController@getInfo');
    Route::post('send-invite', 'SpotApiController@sendInvite');
    
    Route::post('get-recorder', 'SpotApiController@getRecorderInfo');
    Route::post('save-recorder', 'SpotApiController@saveRecorder');
    Route::post('end-recorder', 'SpotApiController@endRecorder');
    Route::post('update-recorder', 'SpotApiController@updateRecorder');
});