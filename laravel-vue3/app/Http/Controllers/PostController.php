<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Notifications\PostCreated;
use Flasher\Prime\FlasherInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PostController extends Controller
{

    // create data

    public function add(Request $request, FlasherInterface $flasher)
    {

        //validate

        $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        // post moode class initiate

        $post = new Post();
        $post->title = $request->title;
        $post->date = now();
        $post->delete_date = now();
        $post->content = $request->content;

        $post->save();

        // Email notification setup pot created

        $user = Auth::user(); 
        $user->notify(new PostCreated($post));


        // flasher
        $flasher->addSuccess('Post created Successfully');

        // return "Post is Saved. ID is - ". $post->id;
        return redirect()->route('posts');
    }

    // read data
    public function index()
    {

        return view('posts');
    }

    // edit 

    public function edit($id, FlasherInterface $flasher)
    {

        $post = Post::find($id);

        //alternative solution for warning to user

        if (empty($post)) {

            $flasher->addError('Post not found');

            return redirect()->route('posts');
        }

        return view('edit-post', [

            'post' => $post,

        ]);
    }

    // Update

    public function update($id, Request $request, FlasherInterface $flasher)
    {

        $post = Post::findOrFail($id);

        //form validation

        $request->validate([

            'title' => 'required',

            'content' => 'required',

        ]);

        $post->title = $request->title;

        $post->content = $request->content;

        $post->save();

        $flasher->addSuccess('Post Updated Successfully');

        return redirect()->route('posts');
    }


    // delete

    public function delete($id,Request $request, FlasherInterface $flasher){

        $post = Post::findOrFail($id);
        
        $post->delete();
        
        $flasher->addSuccess('Delete Successfully');
        
        return redirect()->route('posts');
        
        }
}
