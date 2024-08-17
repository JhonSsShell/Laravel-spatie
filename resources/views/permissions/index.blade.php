<x-app-layout>
    @section('content')
        <div class="container">
            <a href="{{ route('permisos.create') }}">Crear permisos</a>
            <table border="1" class="table">
                <thead>
                    <th>ID</th>
                    <th>Nombre categoria</th>
                    <th>Acciones</th>
                </thead>
                <tbody>
                    @forelse ($permisos as $permiso)
                        <tr>
                            <td>
                                {{ $permiso->id }}
                            </td>
                            <td>
                                {{ $permiso->name }}
                            </td>
                            <td>
                                <a href="{{ route('permisos.edit', $permiso->id) }}" class="btn btn-primary btn-sm">
                                    Modificar
                                </a>
                                {{ html()->modelForm($permiso)->route('permisos.destroy', $permiso->id)->open() }}
                                    <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                {{ html()->closeModelForm() }}
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <th>
                                No hay nada
                            </th>
                        </tr>
                    @endforelse
                </tbody>
            </table>
            {{ $permisos->links() }}
            <br>
            <a href="{{ route('users.index') }}">Listado de usuarios</a>
            <br>
            <a href="{{ route('posts.index') }}">Listado de posts</a>
            <br>
            <a href="{{ route('tags.index') }}">Listado de tags</a>
            <br>
            <a href="{{ route('roles.index') }}">Listado de roles</a>
            <br>
            <a href="{{ route('categories.index') }}">Listado de categorias</a>
        </div>
    @endsection
</x-app-layout>