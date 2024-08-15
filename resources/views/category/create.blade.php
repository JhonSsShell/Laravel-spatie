<a href="{{ route('categories.index') }}">Ver categorias</a>
<br>
{{ html()->form()->route('categories.store')->open() }}
    @include('category.partials.form')
    <button>Crear categoria</button>
{{ html()->form()->close() }}