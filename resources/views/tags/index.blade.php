<x-app-layout>
    @section('content')
    @endsection
</x-app-layout>


<div class="container">
    <a href="{{ route('tags.create') }}">Create tags</a>
    <table border="1" class="table table-hover">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nombre tag</th>
          </tr>
        </thead>
        <tbody>
            @forelse ($tags as $tag)
                <tr>
                    <td>
                        {{ $tag->id }}
                    </td>
                    <td>
                        {{ $tag->name }}
                    </td>
                    <td>
                        <a href="{{ route('tags.edit', $tag->id) }}" class="btn btn-primary btn-sm">Modificar</a>
                        {{ html()->modelForm($tag)->route('tags.destroy', $tag->id)->open() }}
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
    {{ $tags->links() }}
    <br>
    <a href="{{ route('users.index') }}">Listado de Usuarios</a>
    <br>
    <a href="{{ route('posts.index') }}">Listado de posts</a>
    <br>
    <a href="{{ route('categories.index') }}">Listado de categorias</a>
    <br>
    <a href="{{ route('roles.index') }}">Listado de roles</a>
    <br>
    <a href="{{ route('permisos.index') }}">Listado de permisos</a>
</div>
