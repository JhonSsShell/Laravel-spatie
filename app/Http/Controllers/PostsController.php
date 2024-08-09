<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Categories;
use App\Models\Post;
use App\Models\User;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $posts = Post::paginate(5);
        return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $users = User::pluck('name', 'id');
        $tags = Tag::all();
        $categoria = Categories::pluck('name', 'id');
        return view('posts.create', compact('users', 'categoria', 'tags'));
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request)
    {
        try {
            $post = Post::create($request->all());
            $post->tags()->sync($request->tag_id);
            return redirect()->route('posts.index');
        } catch (\Exception $e) {
            dd($e);
        }
        
    }
    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }
    
    /**
     * Modifica los cambios pero no los actualiza
     */
    public function edit(string $id)
    {
        $users = User::pluck('name', 'id');
        $categoria = Categories::pluck('name', 'id');
        // $tags = Tag::pluck('name', 'id');
        $tags = Tag::all();
        $post = Post::where("id", $id)->first();
        $tagsPost = $post->tags;
        // dd($tags->contains('1'));
        return view('posts.edit', compact('users', 'post', 'categoria', 'tags', 'tagsPost'));
    }

    /**
     * Actulizar el post dependiendo del id
     */
    public function update(PostRequest $request, string $id)
    {
        $post = Post::where("id", $id)->first();
        $post->update($request->all());
        $post->tags()->sync($request->tag_id);
        return redirect()->route('posts.index');
    }

    /**
     * Eliminar el post dependiendo del ID
     */
    public function destroy(string $id)
    {
        $post = Post::where("id", $id)->first();
        $post->tags()->detach();
        $post->delete();
        return redirect()->back();
    }

}