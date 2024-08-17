<x-app-layout>
  @section('content')
      <div class="container d-grid gap-2">
        <a href="{{ route('users.index') }}">Volver a la tabla</a>
        <br>
        {{ html()->form()->route('users.store')->open() }}
          <div>
            @include('users.partials.form')
            <button class="btn btn-success my-4" type="submit">Subir</button>
          </div>
        {{ html()->form()->close() }}
      </div>
  @endsection
</x-app-layout>

