<x-app-layout>
  @section('content')
      <div class="container d-grid gap-2">
        <a href="{{ route('roles.index') }}">Volver a la table de roles</a>
        {{ html()->form()->route('roles.store')->open() }}
            @include('roles.partials.form')
            <button type="submit" class="btn btn-success my-3">Subir</button>
        {{ html()->form()->close() }}
      </div>
  @endsection
</x-app-layout>
