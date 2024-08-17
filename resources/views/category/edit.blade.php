<x-app-layout>
  @section('content')
  <div class="container">
      <a href="">Volver al listado de categorias</a>
      {{ html()->modelForm($category)->route('categories.update', $categoria->id)->open() }}
          @include('category.partials.form')
          <button type="submit" class="btn btn-success my-3">Actualizar</button>
      {{ html()->closeModelForm() }}
  </div>
  @endsection
</x-app-layout>