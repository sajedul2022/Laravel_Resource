<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Post;
use Illuminate\Http\Request;

class CommentController extends Controller
{

    public function commentView(){

        $comment = Comment::find(1);
        $post = $comment->post;
        // echo "Post: " . $post;

        return response()->json($comment);

        // dd($post);

    }
}
