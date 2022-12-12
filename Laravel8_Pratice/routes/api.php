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


// Route Api
Route::get('/user/{name}', function($name){
    return( "Hello $name! Welcome to Larvel Artisan");
});


// Regular Expression validation

Route::get('/product/{id?}', function($id=null){
    return "Hello, ID=  $id!";
});

Route::get('/users/{name?}', function($name=null){
    return( "Hello $name!");
});