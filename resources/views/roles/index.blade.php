<x-app-layout>

    
    @section('content')
        <div  class="container">
            <a href="{{ route('roles.create') }}">Crear rol</a>

            <table border="1" class="table">
                <thead>
                    <th>ID</th>
                    <th>Nombre categoria</th>
                    <th>Acciones</th>
                </thead>
                <tbody>
                    @forelse ($roles as $rol)
                        <tr>
                            <td>
                                {{ $rol->id }}
                            </td>
                            <td>
                                {{ $rol->name }}
                            </td>
                            <td>
                                <a href="{{ route('roles.edit', $rol->id) }}" class="btn btn-primary">
                                    Modificar
                                </a>
                                {{ html()->modelForm($rol)->route('roles.destroy', $rol->id)->open() }}
                                    <button type="submit" class="btn btn-danger">Eliminar</button>
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
            {{ $roles->links() }}
            <br>
            <a href="{{ route('users.index') }}">Listado de usuarios</a>
            <br>
            <a href="{{ route('posts.index') }}">Listado de posts</a>
            <br>
            <a href="{{ route('tags.index') }}">Listado de tags</a>
            <br>
        </div>
        
    @endsection

</x-app-layout>


{{-- <a href="{{ route('') }}">Listado de permisos</a> --}}