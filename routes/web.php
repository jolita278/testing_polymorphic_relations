<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::group(['prefix' => 'rules'], function () {
    Route::get('/', ['as' => 'app.rules.index', 'uses' => 'HCPriceRulesController@index']);
    Route::get('/create', ['as' => 'app.rules.create', 'uses' => 'HCPriceRulesController@create']);
    Route::post('/create', ['uses' => 'HCPriceRulesController@store']);

    Route::group(['prefix' => '{id}'], function () {
        Route::get('/', ['uses' => 'HCPriceRulesController@show']);
        Route::get('/edit', ['as' => 'app.rules.edit', 'uses' => 'HCPriceRulesController@edit']);
        Route::post('/edit', ['uses' => 'HCPriceRulesController@update']);
        Route::delete('/', ['as' => 'app.rules.showDelete', 'uses' => 'HCPriceRulesController@destroy']);
    });
});
Route::group(['prefix' => 'goods'], function () {
    Route::get('/', ['as' => 'app.goods.index', 'uses' => 'HCGoodsController@index']);

});