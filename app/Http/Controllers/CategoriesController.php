<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Http\Requests\CategoriesRequest;

class CategoriesController extends Controller
{
    // Metodo index para listar todas las categorias
    public function index()
    {
        $categories = Category::paginate(5);
        return view('category.index', compact('categories'));
    }
    
    // Metodo create para estar en la vista del formulario
    public function create()
    {
        return view('category.create');
    }

    // Metodo para crear la categoria
    public function store(CategoriesRequest $request)
    {
        $categoria = Category::create($request->all());
        return redirect()->route('categories.create');
    }

    
    // Metodo para editar los datos de la categoria por id
    public function edit(string $id)
    {
        $categoria = Category::where("id", $id)->first();
        return view('category.edit', compact('categoria'));
    }

    // Metodo para actualizar la categoria
    public function update(CategoriesRequest $request ,string $id)
    {
        $categoria = Category::where("id", $id)->first();
        $categoria->update($request->all());
        return redirect()->route('category.index');
    }

    // Metodo para eliminar la categoria por id
    public function destroy(string $id)
    {
        $categoria = Category::where("id", $id)->first();
        $categoria->delete();
        return redirect()->back();
    }
}
