<a href="{{ route('users.create') }}">Create user</a>

<div>
    <table border="1">
        <thead>
            <th>ID</th>
            <th>Nombre</th>
            <th>Correo</th>
            <th>Acciones</th>
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
                        <a href="{{ route('users.edit', $user->id) }}">Modificar</a>
                        {{ html()->modelForm($user)->route('users.destroy', $user->id)->open() }}
                            <button type="submit">Eliminar</button>
                        {{ html()->closeModelForm() }}
                        <a href="{{ route('users.posts', $user->id) }}">Posts</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

<a href="{{ route('posts.index') }}">Listado de posts</a>
<br>
<a href="{{ route('categories.index') }}">Listado de categorias</a>
<br>
<a href="{{ route('tags.index') }}">Listado de tags</a>