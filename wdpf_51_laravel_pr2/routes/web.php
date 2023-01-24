<?php

use App\Http\Controllers\dashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\showAge;
use App\Http\Middleware\AuthLogin;
use App\Http\Middleware\checkAge;

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



Route::resource('/products', ProductController::class);



 Route::middleware([checkAge::class])->group(function(){
    Route::get('showage', [showAge::class, 'index']);
 });

Route::get('/dashboard', [dashboardController::class, 'index'])->name('home');

Route::get('/', [LoginController::class, 'index']);

Route::middleware([AuthLogin::class])->group(function(){

    Route::post('/login', [LoginController::class, 'login']);
    // Route::get('/dashboard', [dashboardController::class, 'index'])->name('home');

});

Route::get('/job', function(){
    return view('jobs');
});

Route::get('/about', function(){
    return view('about');
});
