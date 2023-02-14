<?php

use App\Http\Controllers\Api\ApiProductController;
use App\Http\Controllers\Api\DogsController;
use App\Http\Controllers\Api\SearchController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::apiResource('dogs', DogsController::class);


Route::get('/user', function(){
    return "Hello" ;
});

Route::post('/search', [SearchController::class , 'search']);

Route::apiResource('/products', ApiProductController::class);


