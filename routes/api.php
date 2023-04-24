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

/*Route::get('/products',[api\v1\HomeController::class], 'index');

Route::get('/products',[api\v1\HomeController::class], 'store');*/

Route::resource('products', 'api\v1\HomeController');

Route::post('signup', 'api\v1\AuthController@signup');

Route::get('/products/search/{name}',"api\V1\HomeController@search");
