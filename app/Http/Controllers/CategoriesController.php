<?php

namespace App\Http\Controllers;

use App\Models\Categories;
use App\Http\Requests\CategoriesRequest;

class CategoriesController extends Controller
{
    // Metodo index para listar todas las categorias
    public function index()
    {
        $categories = Categories::paginate(5);
        return view('categories.index', compact('categories'));
    }
    
    // Metodo create para estar en la vista del formulario
    public function create()
    {
        return view('categories.create');
    }

    // Metodo para crear la categoria
    public function store(CategoriesRequest $request)
    {
        $categoria = Categories::create($request->all());
        return redirect()->route('categories.create');
    }

    
    public function show(Categories $categories)
    {
        //
    }

    // Metodo para editar los datos de la categoria por id
    public function edit(string $id)
    {
        $categoria = Categories::where("id", $id)->first();
        return view('categories.edit', compact('categoria'));
    }

    // Metodo para actualizar la categoria
    public function update(CategoriesRequest $request ,string $id)
    {
        $categoria = Categories::where("id", $id)->first();
        $categoria->update($request->all());
        return redirect()->route('categories.index');
    }

    // Metodo para eliminar la categoria por id
    public function destroy(string $id)
    {
        $categoria = Categories::where("id", $id)->first();
        $categoria->delete();
        return redirect()->back();
    }
}
