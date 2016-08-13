<?php

namespace App\Http\Controllers;

use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::paginate(10);

        return view('posts.index', compact('posts'));
    }

    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    public function destroy($id)
    {
        Post::destroy($id);

        session()->flash('success', 'Post has been successfully deleted!');

        return back();
    }

    public function create()
    {
        return view('posts.create');
    }

    // public function store(PostFormRequest $request)
    // {
    //     Post::create($request->all());

    // }
}
