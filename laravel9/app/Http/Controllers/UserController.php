<?php

// use Illuminate\Support\Facades\Route;
// use Illuminate\Http\Request;

// Route::prefix('user')
//     ->name('user.')
//     ->controller(UserController::class)
//     ->group(function () {
//         Route::get('/create', 'create')->name('create');
//         Route::get('/read', 'read')->name('read');
//         Route::get('/update/{id}', 'update')->name('update');
//         Route::get('/delete/{id}', 'delete')->name('delete');
//     });


 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Models\User;
 
class UserController extends Controller
{
    /**
     * Show the profile for a given user.
     *
     * @param  int  $id
     * @return \Illuminate\View\View
     */
    public function show($id)
    {
        return view('user.profile', [
            'user' => User::findOrFail($id)
        ]);
    }
}
