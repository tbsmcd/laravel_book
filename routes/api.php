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


// 11章
Route::get('customers', 'ApiController@getCustomers');
Route::post('customers', 'ApiController@postCustomers');


Route::get('customers/{customer_id}', function() {});
Route::post('customers/{customer_id}', function() {});
Route::put('customers/{customer_id}', function() {});
Route::delete('customers/{customer_id}', function() {});

Route::get('reports', function() {});
Route::post('reports', function() {});

Route::get('reports/{report_id}', function() {});
Route::post('reports/{report_id}', function() {});
Route::put('reports/{report_id}', function() {});
Route::delete('reports/{report_id}', function() {});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/action/favorite', 'FavoriteActionController@switchFavorite');
Route::get('/payload', 'ArticlePayloadAction');
