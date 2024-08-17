<x-app-layout>
  @section('content')
      <div class="container">
        <a href="{{ route('users.create') }}">Create user</a>
        <table border="1" class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Nombre</th>
                <th scope="col">Correo</th>
                <th scope="col">Acciones</th>
              </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr>
                        <td>
                            {{ $user->id }}
                        </td>
                        <td>
                            {{ $user->name }}
                        </td>
                        <td>
                            {{ $user->email }}
                        </td>
                        <td>
                            <a href="{{ route('users.edit', $user->id) }}" class="btn btn-primary btn-sm">Modificar</a>
                            {{ html()->modelForm($user)->route('users.destroy', $user->id)->open() }}
                                <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                            {{ html()->closeModelForm() }}
                            <a href="{{ route('users.posts', $user->id) }}" class="btn btn-dark btn-sm">Posts</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        {{ $users->links() }}
        
        <a href="{{ route('posts.index') }}">Listado de posts</a>
        <br>
        <a href="{{ route('categories.index') }}">Listado de categorias</a>
        <br>
        <a href="{{ route('tags.index') }}">Listado de tags</a>
        <br>
        <a href="{{ route('roles.index') }}">Listado de roles</a>
        <br>
        <a href="{{ route('permisos.index') }}">Listado de permisos</a>
      </div>
  @endsection
</x-app-layout>

