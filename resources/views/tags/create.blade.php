<x-app-layout>
  @section('content')
      <div class="container d-grid gap-2">
        <a href="{{ route('tags.index') }}">Ver tags</a>
        {{ html()->form()->route('tags.store')->open() }}
            @include('tags.partials.form')
            <button type="submit" class="btn btn-success my-4">Crear tag</button>
        {{ html()->form()->close() }}
      </div>
  @endsection
</x-app-layout>
