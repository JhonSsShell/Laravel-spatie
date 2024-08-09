<a href="{{ route('tags.create') }}">Create tags</a>

<div>
    <table border="1">
        <thead>
            <th>ID</th>
            <th>Nombre tag</th>
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
                        <a href="{{ route('tags.edit', $tag->id) }}">Modificar</a>
                        {{ html()->modelForm($tag)->route('tags.destroy', $tag->id)->open() }}
                            <button type="submit">Eliminar</button>
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
</div>
<br>
<a href="{{ route('users.index') }}">Listado de Usuarios</a>
<br>
<a href="{{ route('posts.index') }}">Listado de posts</a>
<br>
<a href="{{ route('categories.index') }}">Listado de categorias</a>