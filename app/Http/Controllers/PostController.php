<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Category;
use App\Models\Image;
use App\Models\Post;
use App\Models\User;
use App\Models\Tag;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
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
        $categoria = Category::pluck('name', 'id');
        return view('posts.create', compact('users', 'categoria', 'tags'));
    }
    
    // Metodo para crear el post en la base de datos
    public function store(PostRequest $request)
    {
        try {
          // Crear el post y retornar el modelo
        $post = Post::create($request->all());
        $post->tags()->sync($request->tag_id);
        $archivos = $request->file('archivo');

        foreach($archivos as $file){
          // Se crea la imagen y retorna el modelo
          Image::create([
            'name' => $file->getClientOriginalName(),
            'path' => $file->store('/', 'post'),
            'post_id' => $post->id
          ]);
        }

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
        $categoria = Category::pluck('name', 'id');

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
        try {
          $post = Post::where("id", $id)->first();
          $post->update($request->all());
          $post->tags()->sync($request->tag_id);
          // dd($request->file('archivo'));
          
          if ($request->file('archivo')) {
            
            if ($post->archivos) {
              foreach($post->archivos as $file){
                Storage::disk('post')->delete($file->path);
                $file->delete();
              }
              
              foreach($request->file('archivo') as $file){
                Image::create([
                  'name' => $file->getClientOriginalName(),
                  'path' => $file->store('/', 'post'),
                  'post_id' => $post->id
                ]);
              }
            } else {
              foreach($request->file('archivo') as $file){
                Image::create([
                  'name' => $file->getClientOriginalName(),
                  'path' => $file->store('/', 'post'),
                  'post_id' => $post->id
                ]);
              }
            }
          }
          // $post->update($request->all());
          // dd($post);
          return redirect()->route('posts.index');
        } catch (\Exception $e) {
          dd($e);
        }
    }

    /**
     * Eliminar el post dependiendo del ID
     */
    public function destroy(string $id)
    {
        // Consultar al modelo
        $post = Post::where("id", $id)->first();

        // Eliminar la relacion con las tags
        $post->tags()->detach();
        
        // Recorrer los archivos relacionados al post
        foreach($post->archivos as $file){
          // Se elimina el archivo del disco
          Storage::disk('post')->delete($file->path);
          // Elimina el modelo de la imagen
          $file->delete();
        }

        // Elimina el modelo del post
        $post->delete();
        return redirect()->route('posts.index');
    }

}