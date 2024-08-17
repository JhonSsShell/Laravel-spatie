<x-app-layout>
  @section('content')
      <div class="container">
        <a href="{{ route('posts.index') }}">Volver a la tabla de posts</a>
        {{ html()->form()->route('posts.store')->acceptsFiles()->open() }}
            @include('posts.partials.form')
            <button type="submit" class="btn btn-success my-4">Subir</button>
        {{ html()->form()->close() }}
      </div>
  @endsection
</x-app-layout>

