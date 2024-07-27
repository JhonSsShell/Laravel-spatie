<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Categories;
use App\Models\Post;
use App\Models\User;
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
        $categoria = Categories::pluck('name', 'id');
        return view('posts.create', compact('users', 'categoria'));
    }
    
    /**
     * Store a newly created resource in storage.
     */
    public function store(PostRequest $request)
    {
        //
        $post = Post::create($request->all());
        return redirect()->route('posts.index');
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
        $post = Post::where("id", $id)->first();
        return view('posts.edit', compact('users', 'post', 'categoria'));
    }

    /**
     * Actulizar el post dependiendo del id
     */
    public function update(PostRequest $request, string $id)
    {
        $post = Post::where("id", $id)->first();
        $post->update($request->all());
        return redirect()->route('posts.index');
    }

    /**
     * Eliminar el post dependiendo del ID
     */
    public function destroy(string $id)
    {
        $post = Post::where("id", $id)->first();
        $post->delete();
        return redirect()->back();
    }

}