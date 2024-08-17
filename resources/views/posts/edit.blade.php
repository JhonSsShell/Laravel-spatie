<x-app-layout>
  @section('content')
      <div class="container">
        <a href="{{ route('posts.index') }}">Volver al listado de posts</a>
        {{ html()->modelForm($post)->route('posts.update', $post->id)->acceptsFiles()->open() }}
            @include('posts.partials.form')
            <button type="submit" class="btn btn-success my-3">Actualizar</button>
        {{ html()->closeModelForm() }}
      </div>
  @endsection
</x-app-layout>
