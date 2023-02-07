<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\dashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ReportController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\showAge;
use App\Http\Controllers\TestController;
use App\Http\Controllers\UserController;
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

// test
Route::get('/test', [TestController::class, 'testdata']);
Route::get('/report1', [ReportController::class, 'report1']);

// ORM
Route::get('/users', [UserController::class, 'index']);
Route::get('/phone', [UserController::class, 'phoneData']);
Route::get('/post', [PostController::class, 'postView']);
Route::get('/comment', [CommentController::class, 'commentView']);
Route::get('/roles', [UserController::class, 'roleAssign']);
Route::get('/roleShow', [UserController::class, 'roleShow']);

// mail

Route::get('send-mail', [MailController::class, 'index']);
Route::get('contact', [MailController::class, 'contactForm']);
Route::post('contact', [MailController::class, 'messageSend'])->name('sendMessage');


