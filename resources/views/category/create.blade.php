<x-app-layout>
  @section('content')
    <div class="container">
      <a href="{{ route('categories.index') }}">Ver categorias</a>
      <br>
      {{ html()->form()->route('categories.store')->open() }}
          @include('category.partials.form')
          <button type="sumbit" class="btn btn-success my-3">Crear categoria</button>
      {{ html()->form()->close() }}
    </div>
  @endsection
</x-app-layout>
