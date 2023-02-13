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

Route::get('/products', 'App\Http\Controllers\ProductsController@index');
Route::get('/products/{id}', 'App\Http\Controllers\ProductsController@show');
Route::put('/products/{id}', 'App\Http\Controllers\ProductsController@update');
Route::delete('/products/{id}', 'App\Http\Controllers\ProductsController@destroy');
Route::post('/orders', 'App\Http\Controllers\OrdersController@store');
Route::get('/orders', 'App\Http\Controllers\OrdersController@index');
Route::get('/orders/{id}', 'App\Http\Controllers\OrdersController@show');
Route::put('/orders/{id}', 'App\Http\Controllers\OrdersController@update');
Route::delete('/orders/{id}', 'App\Http\Controllers\OrdersController@destroy');
Route::get('/categories', 'App\Http\Controllers\CategoriesController@index');
Route::get('/categories/{id}', 'App\Http\Controllers\CategoriesController@show');
Route::put('/categories/{id}', 'App\Http\Controllers\CategoriesController@update');
Route::delete('/categories/{id}', 'App\Http\Controllers\CategoriesController@destroy');

