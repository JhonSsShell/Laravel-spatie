<x-app-layout>
    @section('content')
        <a href="{{ route('users.index') }}">Users</a>
        <a href="{{ route('posts.index') }}">Posts</a>
        <a href="{{ route('categories.index') }}">Categorias</a>
        <a href="{{ route('tags.index') }}">Tags</a>
        <a href="{{ route('roles.index') }}">Roles</a>
        <a href="{{ route('permisos.index') }}">Permisos</a>
    @endsection
</x-app-layout>
