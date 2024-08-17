<x-app-layout>
  @section('content')
      
  <div class="container">
      <a href="{{ route('users.index') }}">Volver al listado de los usuarios</a>
      <div>
          Post de {{ $user->name }}
      </div>
      <table border="1" class="table">
          <thead>
            <tr>
              <th scope="col">ID</th>
              <th scope="col">Título</th>
              <th scope="col">Cuerpo</th>
            </tr>
          </thead>
          <tbody>
              @forelse ($posts as $post)
                  <tr>
                      <td>{{ $post->id }}</td>
                      <td>{{ $post->title }}</td>
                      <td>{{ $post->body }}</td>
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
  @endsection
</x-app-layout>

