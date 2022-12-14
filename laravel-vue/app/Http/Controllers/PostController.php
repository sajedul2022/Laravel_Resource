<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function add(Request $request){

        // validate

        $request->validate([
            'title'=> 'required',
            'content'=> 'required'
        ]);

        // post moode class initiate

        $post = new Post();
        $post->title = $request->title;
        $post->date = now();
        $post->content = $request->content;

        $post->save();

        return "Post is Saved. ID is - ". $post->id;

        
    }
}
