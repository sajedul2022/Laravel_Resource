<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    public function postView(){

        $posts = Post::get();
        // $posts = Post::find(1);
        // $comments = $posts->comments;

        // return response()->json($posts);
        // dd($comments);
        return view('post.index', compact('posts'));

    }
}
