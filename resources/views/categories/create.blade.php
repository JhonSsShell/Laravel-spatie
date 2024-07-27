<a href="{{ route('categories.index') }}">Ver categorias</a>
<br>
{{ html()->form()->route('categories.store')->open() }}
    @include('categories.partials.form')
    <button>Crear categoria</button>
{{ html()->form()->close() }}