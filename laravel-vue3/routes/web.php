<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Models\Post;
use App\Notifications\PostCreated;
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

// guest-layout route

Route::get('/about', function () {
    return view('about');
});

// app-layout route

// Route::get('/posts', function () {
//     return view('posts');
// })->middleware('auth');


Route::get('/dashboard', function () {
    $posts = Post::all();
    // dd($posts);
    return view('dashboard', [
        'posts' => $posts
    ]);
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // crud: read
    Route::get('/posts',  function () {
        $posts = Post::all();
        // dd($posts);
        return view('posts', [
            'posts' => $posts
        ]);
    }, [PostController::class, 'index'])->name('posts');

    // add post
    Route::post('/add-post', [PostController::class, 'add'])->name('add-post');

    //  Edit 
    Route::get('/edit-post/{id}', [PostController::class, 'edit'])->name('edit-post');

    // Update
    Route::post('/update-post/{id}', [PostController::class, 'update'])->name('update-post');

    // delete
    Route::post('/delete-post/{id}', [PostController::class, 'delete'])->name('delete-post');

    //created test notification route 

    Route::get('/notification-test', function () {

        $user = \Illuminate\Support\Facades\Auth::user();
        // dd($user->name);

        $user->notify(new PostCreated);
        return 'ok';
    });
});



require __DIR__ . '/auth.php';
