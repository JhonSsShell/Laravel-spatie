<a href="{{ route('permisos.index') }}">Volver a la table de permisos</a>

{{ html()->form()->route('permisos.store')->open() }}
    @include('permissions.partials.form')
    <button type="submit">Subir</button>
{{ html()->form()->close() }}