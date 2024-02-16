<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;
use App\Events\UpdateUserPostsCount;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $posts = Post::with('user')->paginate(10);
        return view('posts.index',compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $users = User::all();
        return view('posts.create',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $userId = auth()->id();
        $post = Post::create([
            'title' => $request->title,
            'slug' => $request->slug,
            'body' => $request->body,
            'enabled' => $request->enabled,
            'published_at' => $request->published_at,
            'user_id' => $userId
        ]);
        event(new UpdateUserPostsCount($post));
        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $users = User::all();
        return view('posts.edit', compact('post', 'users'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        if ($post->user_id !== auth()->id()){
            abort(403, 'Unauthorized action');
        }
        $post->update([
            'title' => $request->title,
            'slug' => $request->slug,
            'body' => $request->body,
            'enabled' => $request->enabled,
            'published_at' => $request->published_at,
            'user_id' => $post->user_id,
        ]);
        return redirect()->route('posts.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('posts.index');
    }
}
