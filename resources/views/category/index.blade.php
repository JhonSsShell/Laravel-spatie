<x-app-layout>
  @section('content')
      
  <div class="container">
      <a href="{{ route('categories.create') }}">Crear categoria</a>
      <table border="1" class="table table-hover">
          <thead>
              <th>ID</th>
              <th>Nombre categoria</th>
              <th>Acciones</th>
          </thead>
          <tbody>
              @forelse ($categories as $category)
                  <tr>
                      <td>
                          {{ $category->id }}
                      </td>
                      <td>
                          {{ $category->name }}
                      </td>
                      <td>
                          <a href="{{ route('categories.edit', $category->id) }}" class="btn btn-primary btn-sm">
                              Modificar
                          </a>
                          {{ html()->modelForm($category)->route('categories.destroy', $category->id)->open() }}
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
      {{ $categories->links() }}
      <br>
      <a href="{{ route('users.index') }}">Listado de usuarios</a>
      <br>
      <a href="{{ route('posts.index') }}">Listado de posts</a>
      <br>
      <a href="{{ route('tags.index') }}">Listado de tags</a>
      <br>
      <a href="{{ route('roles.index') }}">Listado de roles</a>
      <br>
      <a href="{{ route('permisos.index') }}">Listado de permisos</a>
  </div>
  @endsection
</x-app-layout>

