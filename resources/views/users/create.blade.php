<a href="{{ route('users.index') }}">Volver a la tabla</a>
<br>
{{ html()->form()->route('users.store')->open() }}
    @include('users.partials.form')
    <button>Subir</button>
{{ html()->form()->close() }}
