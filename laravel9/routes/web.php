<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
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

Route::get('/about', function () {
    return view('about');
});
Route::get('/contact', function(){
    return view('contact');
});

Route::get('/there', function () {
    return "You're there!";
}); 

// Redirect
Route::redirect('/contact', '/there');

// Route::view('/welcome', 'about', ['name' => 'Sajedeul']);



//01. Required  get the parameter of name

Route::get('list/{id}/{name}', function($id, $name){
    echo "Track ID is- ". $id. " Name is- ". $name;
});

Route::get('students/{name}', function(Request  $req) {
    echo 'Students Name is ' . $req->name;
});

// Parameters & Dependency Injection
Route::get('stu/{name}/{id}', function(Request  $req, $n, $id) {
    echo 'Students Name is ' . $n . " ID is -". $id;
});

// 02. Optional Parameters
Route::get('char/{name?}', function($name= "sajedul"){
    echo " Name is- ". $name;
});

// 03.Regular Expression Constraints
Route::get('/user/{name}', function ($name) {
    return "Name: ".$name;
})->where('name', '[A-Za-z]+');  //accept only alphabetical value

Route::get('/user2/{id}', function($id){
    return " Id is - ". $id;
})->where('id', '[0-9]+');

// Route::get('/user3/{id}/{name}', function ($id, $name) {
//     return "Id: $id and Name: $name";
// })->where(['id' => '[0-9]+', 'name' => '[a-z]+']); //Accept both Alphabetic

// use laravel Build in method in RegEx and use optional / coalasing 
Route::get('/user3/{id?}/{name?}', function ($id = null, $name=null) {
    return "Id: $id and Name: $name";
})->whereNumber('id')->whereAlpha('name'); 

Route::get('/user4/{name}', function ($name) {
    return "Welcome $name";
})->whereAlphaNumeric('name');
 
Route::get('/user5/{id}', function ($id) {
    return "Welcome , Your Id is: $id";
})->whereUuid('id');

// Global Constraints
Route::get('/user6/{id}', function ($id) {
    return "Welcome , Your Id is: $id";
});