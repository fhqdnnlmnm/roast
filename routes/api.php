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
| ,'middleware' =>'auth:api'
*/

Route::group(['prefix' => 'v1'],function(){
    Route::get('/user',function(Request $request){
        return $request->user();
    });
    Route::get('/cafes','API\CafesController@getCafes');
    Route::post('/cafes','API\CafesController@postNewCafe');
    Route::get('/cafes/{id}','API\CafesController@getCafe');
    Route::get('/user',function(){
        return response()->json(['avatar'=>'']);
    });
    Route::get('/brew-methods','API\BrewMethodsController@getBrewMethods');
});

