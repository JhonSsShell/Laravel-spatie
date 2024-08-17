<x-app-layout>
  @section('content')
      <div class="container d-grid gap-2">
        <a href="{{ route('users.index') }}">Volver a la tabla</a>
        <br>
        {{ html()->modelForm($user)->route('users.update', $user->id)->open() }}
            @include('users.partials.form')
            <button type="submit" class="btn btn-success my-4">Actualizar</button>
        {{ html()->closeModelForm() }}
      </div>
  @endsection
</x-app-layout>
