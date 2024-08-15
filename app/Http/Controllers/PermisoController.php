<?php

namespace App\Http\Controllers;

use App\Models\Permiso;
use Illuminate\Http\Request;
use Spatie\Permission\Models\Permission;

class PermisoController extends Controller
{
    public function index()
    {
        $permisos = Permission::paginate(5);
        return view('permissions.index', compact('permisos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('permissions.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $permiso = Permission::create($request->all());
        return redirect()->route('permisos.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Permiso $rol)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $permiso = Permission::where('id', $id)->first();
        return view('permissions.edit', compact('permiso'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $permiso = Permission::where('id', $id)->first();
        $permiso->update($request->all());
        return redirect()->route('permisos.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $permiso = Permission::where('id', $id)->first();
        $permiso->delete();
        return redirect()->back();
    }
}
