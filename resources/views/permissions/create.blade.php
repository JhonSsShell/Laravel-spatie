<x-app-layout>
  @section('content')
      <div class="container d-grid gap-2">
        <a href="{{ route('permisos.index') }}">Volver a la table de permisos</a>
        {{ html()->form()->route('permisos.store')->open() }}
            @include('permissions.partials.form')
            <button type="submit" class="btn btn-success my-3">Subir</button>
        {{ html()->form()->close() }}
      </div>
  @endsection
</x-app-layout>