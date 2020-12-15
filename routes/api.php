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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('/', 'Api\PizzaController@index');
Route::get("/order/{user_id}",'Api\OrderController@orders');

Route::apiResources([
    '/pizza' => 'Api\PizzaController',
    '/order' => 'Api\OrderController'
]);

Route::get("/cources",'Api\CourceController@cources');
Route::post("/register",'Api\UserController@create');
Route::post("/login",'Api\UserController@login');
