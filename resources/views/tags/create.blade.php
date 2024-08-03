<a href="{{ route('tags.index') }}">Ver tags</a>

{{ html()->form()->route('tags.store')->open() }}
    @include('tags.partials.form')
    <button>Crear tag</button>
{{ html()->form()->close() }}