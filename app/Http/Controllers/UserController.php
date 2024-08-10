<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // Metodo index del UserController
    public function index()
    {
        // Obtener todos los usuarios
        $users = User::paginate(5);
        
        // Retorna a la vista de la tabla con la cantidad de usuarios
        return view('users.index', compact('users'));
    }


    // Metodo create del UserController (Redirije al formulario)
    public function create()
    {
        // Retorna la vista del formulario para crear un nuevo usuario
        return view('users.create');
    }
    
    // Metodo store, para crear un nuevo usuario en la base de datos, que pasa por una validacion
    public function store(UserRequest $request)
    {
        //
        $usuario = User::create($request->all());
        return redirect()->route("users.index");
    }
    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }
    
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::where("id", $id)->first();
        return view("users.edit", compact('user'));
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(UserRequest $request, string $id)
    {
        $user = User::where("id", $id)->first();
        $user->update($request->all());
        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $user = User::where("id", $id)->first();
        // dd($user);
        // dd($user->posts);
        // $user->posts()->delete();
        $user->delete();
        return redirect()->back();
    }

    public function posts(string $id){
        $user = User::where("id", $id)->first();
        $posts = $user->posts;
        return view('users.posts', compact('user', 'posts'));
        // dd($user->posts);
    }
}
