<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Categories;
use App\Models\Images;
use App\Models\Post;
use App\Models\User;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{
    // Metodo para listar los posts
    public function index()
    {
        //
        $posts = Post::paginate(5);
        return view('posts.index', compact('posts'));
    }

    // Metodo que retorna la visat del formulario
    public function create()
    {
        // Esto es para hacer un comboBox
        $users = User::pluck('name', 'id');

        $tags = Tag::all();

        // Esto es para hacer un comboBox
        $categoria = Categories::pluck('name', 'id');
        return view('posts.create', compact('users', 'categoria', 'tags'));
    }
    
    // Metodo para crear el post en la base de datos
    public function store(PostRequest $request)
    {
        try {
            // Toma el modelo
            $post = Post::create($request->all());


            // Toma la cantidad de archivos
            $files = $request->archivo;
            $data = [];
            foreach ($files as $file) {
                $img = Images::create([
                    'name' => $file->getClientOriginalName(),
                    'path' => $file->store('/', 'post')
                ]);
                array_push($data, $img->id);
            }

            $post->images()->sync($data);

            $post->tags()->sync($request->tag_id);
            return redirect()->route('posts.index');
        } catch (\Exception $e) {
            dd($e);
        }
        
    }
    
    public function show(string $id)
    {
        //
    }
    
    // Metodo para editar los datos del post, por id
    public function edit(string $id)
    {
        // Esto es para hacer un comboBox
        $users = User::pluck('name', 'id');
        $categoria = Categories::pluck('name', 'id');

        $tags = Tag::all();
        $post = Post::where("id", $id)->first();
        $tagsPost = $post->tags;
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