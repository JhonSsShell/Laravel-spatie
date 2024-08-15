<a href="{{ route('roles.index') }}">Volver a la table de roles</a>

{{ html()->form()->route('roles.store')->open() }}
    @include('roles.partials.form')
    <button type="submit">Subir</button>
{{ html()->form()->close() }}