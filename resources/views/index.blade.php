<x-app-layout>
    @section('content')
    <div class="container">
      <ul class="list-group">
        <li class="list-group-item">
          <a href="{{ route('users.index') }}">Users</a>
        </li>
        <li class="list-group-item">
          <a href="{{ route('posts.index') }}">Posts</a>
        </li>
        <li class="list-group-item">
          <a href="{{ route('categories.index') }}">Categorias</a>
        </li>
        <li class="list-group-item">
          <a href="{{ route('tags.index') }}">Tags</a>
        </li>
        <li class="list-group-item">
          <a href="{{ route('roles.index') }}">Roles</a>
        </li>
        <li class="list-group-item">
          <a href="{{ route('permisos.index') }}">Permisos</a>
        </li>
      </ul>
    </div>
    @endsection
</x-app-layout>
