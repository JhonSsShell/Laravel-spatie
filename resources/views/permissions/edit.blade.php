<x-app-layout>
  @section('content')
      <div class="container d-grid gap-2">
        <a href="{{ route('permisos.index') }}">Volver a la tabla de roles</a>
        <div>
            {{ html()->modelForm($permiso)->route('permisos.update', $permiso->id)->open() }}
                @include('permissions.partials.form')
                <button type="submit" class="btn btn-success my-3">Actualizar</button>
            {{ html()->closeModelForm() }}
        </div>
      </div>
  @endsection
</x-app-layout>
