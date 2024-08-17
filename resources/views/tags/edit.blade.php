<x-app-layout>
  @section('content')
      <div class="container">
        <a href="{{ route('tags.index') }}">Volver atras</a>
        <div>
            {{ html()->modelForm($tag)->route('tags.update', $tag->id)->open() }}
                @include('tags.partials.form')
                <button type="submit" class="btn btn-success my-3">Actualizar</button>
            {{ html()->closeModelForm() }}
        </div>
      </div>
  @endsection
</x-app-layout>

