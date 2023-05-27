<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\StorePostRequest;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class PostController extends Controller
{


    public function index()
    {
        // $posts = DB::table('posts')->latest()->get();
        // return response()->json($posts, 200);

        $posts = Post::paginate(3);



        return view('posts.index')->with('posts', $posts);
    }


    public function create()
    {
        return view('posts.create');
    }


    public function store(StorePostRequest $request)
    {

        if($request->hasFile('photo')){
            $path = $request->file('photo')->store('post-photos');
        }

        $post = Post::create([
            'title' => $request->title,
            'photo' => $path ?? null,
            'short_content' => $request->short_content,
            'content' => $request->content,
        ]);
        return redirect()->route('posts.index');
        // return response()->json($request, 200);
    }


    public function show(Post $post)
    {
        return view('posts.show')->with([
            'post' => $post,
            'recent_posts' => Post::latest()->get()->except($post->id)->take(5)
        ]);

    }


    public function edit(Post $post)
    {

        return view('posts.edit')->with('post', $post);
    }


    public function update(StorePostRequest $request, Post  $post)
    {

        if($request->hasFile('photo')){
            if(isset($post->photo)){
                Storage::delete($post->photo);
            }
            $path = $request->file('photo')->store('post-photos');
        }

        $post->update([
            'title' => $request->title,
            'photo' => $path ?? $post->photo,
            'short_content' => $request->short_content,
            'content' => $request->content,
        ]);

        return redirect()->route('posts.show',['post' => $post->id]);
    }


    public function destroy(Post $post)
    {
        if(isset($post->photo)){
            Storage::delete($post->photo);
        }

        $post->delete();

        return redirect()->route('posts.index');
    }

}
