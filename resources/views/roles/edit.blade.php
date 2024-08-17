<x-app-layout>
  @section('content')
      <div class="container d-grid gap-2">
        <a href="{{ route('roles.index') }}">Volver a la tabla de roles</a>
        <div>
            {{ html()->modelForm($rol)->route('roles.update', $rol->id)->open() }}
                @include('roles.partials.form')
                <button type="submit" class="btn btn-success my-3">Actualizar</button>
            {{ html()->closeModelForm() }}
        </div>
      </div>
  @endsection
</x-app-layout>
