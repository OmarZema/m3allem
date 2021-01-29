<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    // public function __construct()
    // {
    //     $this->middleware(['auth']);
    // }
    public function index()
    {
        $posts = Post::with(['user', 'likes'])->paginate(2);

        // $posts = Post::get();


        return view('posts.index', [
            'posts' => $posts
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'body' => 'required'
        ]);

        // $request->user()->posts()->create($request->only('body'));

        $request->user()->posts()->create([
            'content' => $request->body
        ]);

        return back();
    }

    public function destroy(Post $post)
    {

        // dd($post);
        $post->delete();
        return back();
    }
}
