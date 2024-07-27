
<div>

    <div>
        Post de {{$user->name}}    
    </div>


    <table border="1">
        <thead>
            <th>ID</th>
            <th>Título</th>
            <th>Cuerpo</th>
        </thead>
        <tbody>
            @forelse ($posts as $post)
                <tr>
                    <td>{{$post->id}}</td>
                    <td>{{$post->title}}</td>
                    <td>{{$post->body}}</td>
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