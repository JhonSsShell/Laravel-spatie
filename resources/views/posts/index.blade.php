<x-app-layout>
    @section('content')
        <div class="container">
            <a href="{{ route('posts.create') }}">Create post</a>
            <table border="1" class="table">
                <thead>
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Título</th>
                    <th scope="col">Cuerpo</th>
                    <th scope="col">Autor</th>
                    <th scope="col">Categoria</th>
                    <th scope="col">Tags</th>
                    <th scope="col">Acciones</th>
                  </tr>
                </thead>
                <tbody>
                    @forelse ($posts as $post)
                        <tr>
                            <td>
                                {{ $post->id }}
                            </td>
                            <td>
                                {{ $post->title }}
                            </td>
                            <td>
                                {{ $post->body }}
                            </td>
                            <td>
                                {{ $post->user->name }}
                            </td>
                            <td>
                                {{ $post->category->name ?? 'no existe nada' }}
                            </td>
                            <td>
                                @foreach ($post->tags as $tag)
                                    {{ $tag->name }}
                                @endforeach
                            </td>
                            <td>
                                <a href="{{ route('tags.posts', $post->id) }}" class="btn btn-dark btn-sm">Tags</a>
                                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-primary btn-sm">Modificar</a>
                                {{ html()->modelForm($post)->route('posts.destroy', $post->id)->open() }}
                                  <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                {{ html()->closeModelForm() }}
                            </td>
                        </tr>
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
            {{ $posts->links() }}
            <br>
            <a href="{{ route('users.index') }}">Listado de usuarios</a>
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
