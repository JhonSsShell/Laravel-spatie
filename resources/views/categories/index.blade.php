<a href="{{ route('categories.create') }}">Crear categoria</a>

<div>

    <table border="1">
        <thead>
            <th>ID</th>
            <th>Nombre categoria</th>
            <th>Acciones</th>
        </thead>
        <tbody>
            @forelse ($categories as $categorie)
                <tr>
                    <td>
                        {{ $categorie->id }}
                    </td>
                    <td>
                        {{ $categorie->name }}
                    </td>
                    <td>
                        <a href="{{ route('categories.edit', $categorie->id) }}">
                            Modificar
                        </a>
                        {{ html()->modelForm($categorie)->route('categories.destroy', $categorie->id)->open() }}
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
<a href="{{ route('users.index') }}">Listado de usuarios</a>
<br>
<a href="{{ route('posts.index') }}">Listado de posts</a>
<br>
<a href="{{ route('tags.index') }}">Listado de tags</a>