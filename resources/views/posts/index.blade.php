<a href="{{ route('posts.create') }}">Create post</a>

<div>
    <table border="1">
        <thead>
            <th>ID</th>
            <th>Título</th>
            <th>Cuerpo</th>
            <th>Autor</th>
            <th>Categoria</th>
            <th>Tags</th>
            <th>Acciones</th>
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
                        {{ $post->category->name ?? "no existe nada" }}
                    </td>
                    <td>
                        @foreach ($post->tags as $tag)
                            {{ $tag->name }}
                        @endforeach
                    </td>
                    <td>
                        <a href="{{ route('tags.posts', $post->id) }}">Tags</a>
                        <a href="{{ route('posts.edit', $post->id) }}">Modificar</a>
                        {{ html()->modelForm($post)->route('posts.destroy', $post->id)->open() }}
                            <button type="submit">Eliminar</button> </td></tr>
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
    {{ $posts->links() }}
</div>
<br>
<a href="{{ route('users.index') }}">Listado de usuarios</a>
<br>
<a href="{{ route('categories.index') }}">Listado de categorias</a>
<br>
<a href="{{ route('tags.index') }}">Listado de tags</a>