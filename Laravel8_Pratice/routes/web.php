<?php

use Illuminate\Support\Facades\Route;

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



Route::get('/student', function(){
    return "Hello, Larvel Student";
});

Route::redirect('/student', '/there');

Route::get('/there', function(){
    return "Hello, Yor are There";
});




Route::get('/contact', function () {
    return view('contact');
});

// Route::get('/user/{name?}', function($name=null){
//     return( "Hello $name!");
// })->where('name', '[A-Za-z]+');

// Route::get('/user/{id?}', function($id=null){
//     return( "Hello $id!");
// })->where('id', '[0-9]+');

// Controller

use App\Http\Controllers\homeController;

Route::get('/home/{name?}/{age?}', [homeController::class, 'index']);

Route::get('/geturldata', [homeController::class, 'geturldata']);

// user controller databaase connectionn

use App\Http\Controllers\UserController;
 
Route::get('/user/{id}', [UserController::class, 'show']);

// Auto reload

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// Crud Resource

use App\Http\Controllers\ProductController;
 
Route::resource('products', ProductController::class);
