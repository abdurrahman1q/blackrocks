<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\rating;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::where('user_id', auth()->id())->get();
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $request->validate([
            'caption' => 'required|string',
            'audio' => 'required|mimes:mp3',
            'image' => 'required|mimes:jpg,jpeg,png'

        ]);
        $post = new Post;
        $post->caption = $request->caption;
        $post->artist = $request->artist;
        $post->label = $request->label;
        $post->user_id = auth()->id();
        $post->audio = $request->audio->store('audios');
        $post->image = $request->image->store('images');

        $post->save();
        return redirect()->back()->with('success', 'Post created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    public function rating(Request $request)
    {
        Rating::create([
            "name" => $request->name,
            "email" => $request->email,
            "rating" => $request->rating,
            "review" => $request->review,
            "post_id" => $request->post_id
        ]);
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $request->validate([
            'audio' => 'nullable|mimes:mp3',
            'image' => 'nullable|mimes:jpeg,jpg,png',
            'caption' => 'required|string',
            'artist' => 'required|string',
            'label' => 'required|string'
        ]);

        if ($request->image) {
            if (Storage::exists($post->image)) {
                Storage::delete($post->image);
            }
            $post->image = $request->image->store('images');
        }
        if ($request->audio) {
            if (Storage::exists($post->audio)) {
                Storage::delete($post->audio);
            }
            $post->audio = $request->audio->store('audios');
        }
        $post->caption = $request->caption;
        $post->label = $request->label;
        $post->artist = $request->artist;
        $post->update();
        return redirect()->route('posts.index')->with('success', 'Post updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        if (Storage::exists($post->audio)) {
            Storage::delete($post->audio);
        }
        if (Storage::exists($post->image)) {
            Storage::delete($post->image);
        }
        $post->delete();
        return back()->with('success', 'Post deleted succesfully');
    }
}
