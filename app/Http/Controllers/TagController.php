<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use App\Http\Requests\TagRequest;
use App\Models\Post;

use function PHPUnit\Framework\returnSelf;

class TagController extends Controller
{
    // Metodo para listar todas las tags
    public function index()
    {
        $tags = Tag::paginate(5);
        return view('tags.index', compact('tags'));
    }

    // Metodo que retornara la vista para crear una tag
    public function create()
    {
        return view('tags.create');
    }

    // Metodo para crear una nueva tag
    public function store(TagRequest $request)
    {
        $tag = Tag::create($request->all());
        return redirect()->route('tags.create');
    }

    public function show(Tag $tag)
    {
        //
    }

    // Metodo para editar los datos de una tag
    public function edit(string $id)
    {
        $tag = Tag::where('id', $id)->first();
        return view('tags.edit', compact('tag'));
    }

    // Metodo para actualizar los datos de la tag
    public function update(TagRequest $request, string $id)
    {
        $tag = Tag::where('id', $id)->first();
        $tag->update($request->all());
        return redirect()->route('tags.index');
    }

    // Metodo para eliminar la tag
    public function destroy(string $id)
    {
        $tag = Tag::where('id', $id)->first();
        $tag->delete();
        return redirect()->back();
    }

    // Metodo para listar las tags que estan asociadas a ese post
    public function posts(string $id){
        $post = Post::where("id", $id)->first();
        $tags = $post->tags;
        return view("posts/tags", compact("post", "tags"));
    }
}
